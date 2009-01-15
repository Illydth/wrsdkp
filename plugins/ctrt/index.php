<?php
/**
 * Import pages for CT_RaidTracker Import
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author freddy <CTRaidTrackerImport@freddy.eu.org>
 * $Rev: 257 $ $Date: 2008-05-14 00:09:13 -0700 (Wed, 14 May 2008) $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', "ctrt");

$eqdkp_root_path = './../../';

include_once($eqdkp_root_path . 'common.php');
$ctrt = $pm->get_plugin('ctrt');

if ( !$pm->check(PLUGIN_INSTALLED, 'ctrt') )
{
	message_die('The CT_RaidTracker Import plugin is not installed.');
}

include_once($eqdkp->root_path.'plugins/'.$ctrt->get_data('path').'/config.php');

if(!function_exists('html_entity_decode'))
{
	function html_entity_decode($string)
	{
		$string = preg_replace('~&#x([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $string);
		$string = preg_replace('~&#([0-9]+);~e', 'chr(\\1)', $string);
		$trans_tbl = get_html_translation_table(HTML_ENTITIES);
		$trans_tbl = array_flip($trans_tbl);
		return strtr($string, $trans_tbl);
	}
}

/**
 * Class CTRT_Import displays the import pages and import raid and item data
 * @subpackage ImportCTRT
 */
class CTRT_Import extends EQdkp_Admin
{
	/**
	 * @var array configuration settings
	 * @access private
	 */
	var $_ctrt_settings = array();

	function ctrt_import()
	{
		global $db, $eqdkp, $user, $tpl, $pm;
		global $SID;

		parent::eqdkp_admin();

		$this->assoc_buttons(array(
            'parse' => array(
                'name'    => 'parse',
                'process' => 'process_parse',
                'check'   => 'a_raid_add'),
            'form' => array(
                'name'    => '',
                'process' => 'display_form',
                'check'   => 'a_raid_add'),
            'insert' => array(
                'name'    => 'insertraids',
                'process' => 'insert_log',
                'check'   => 'a_raid_add'),
		)
		);

		/**
		 * Get CTRT Import configuration settings
		 */
		$sql = "SELECT config_name, config_value
                  FROM ".CTRT_CONFIG_TABLE;
		$config_results = $db->query($sql);
		while ($config_value = $db->fetch_record($config_results)) {

			/**
			 * Because IDs are stored instead of names, we need to get the name for CTRT
			 */
			if (!strcmp($config_value['config_name'],'NewMemberDefaultRank')) {
				$sql = "SELECT rank_name
                          FROM ".MEMBER_RANKS_TABLE."
                         WHERE rank_id = '".$config_value['config_value']."'";
				$this->_ctrt_settings[$config_value['config_name']] = $db->query_first($sql);
			} else {
				$this->_ctrt_settings[$config_value['config_name']] = $config_value['config_value'];
			}
		}
		$db->free_result($config_results);

		/**
		 * Get Player Aliases
		 */
		include_once($eqdkp->root_path."plugins/".$pm->get_data("ctrt","path")."/admin/dao/playeralias.php");
		$daoPlayerAlias = new CTRT_PlayerAlias;

		$aliases = $daoPlayerAlias->getAllWithMemberName();
		$this->_ctrt_settings['PlayerAliases'] = array();
		foreach ($aliases as $alias) {
			$this->_ctrt_settings['PlayerAliases'][$alias['alias_name']] = $alias['member_name'];
		}

		/**
		 * Get Event Triggers
		 */
		include_once($eqdkp->root_path."plugins/".$pm->get_data("ctrt","path")."/admin/dao/eventtrigger.php");
		$daoEventTrigger = new CTRT_EventTrigger;

		$eventTriggers = $daoEventTrigger->getAll();
		$this->_ctrt_settings['EventTriggers'] = array();
		foreach ($eventTriggers as $eventTrigger) {
			$this->_ctrt_settings['EventTriggers'][$eventTrigger['event_trigger_name']] = $eventTrigger['event_trigger_result'];
		}

		/**
		 * Get Raidnote Triggers
		 */
		include_once($eqdkp->root_path."plugins/".$pm->get_data("ctrt","path")."/admin/dao/raidnotetrigger.php");
		$daoRaidNoteTrigger = new CTRT_RaidNoteTrigger;

		$raidNoteTriggers = $daoRaidNoteTrigger->getAll();
		$this->_ctrt_settings['RaidNoteTriggers'] = array();
		foreach ($raidNoteTriggers as $raidNoteTrigger) {
			$this->_ctrt_settings['RaidNoteTriggers'][$raidNoteTrigger['raid_note_trigger_name']] = $raidNoteTrigger['raid_note_trigger_result'];
		}

		/**
		 * Get Own Raid
		 */
		include_once($eqdkp->root_path."plugins/".$pm->get_data("ctrt","path")."/admin/dao/ownraids.php");
		$daoOwnRaid = new CTRT_OwnRaids;

		$ownRaids = $daoOwnRaid->getAll();
		$this->_ctrt_settings['OwnRaids'] = array();
		foreach ($ownRaids as $ownRaid) {
			$this->_ctrt_settings['OwnRaids'][] = $ownRaid['own_raid_name'];
		}

		/**
		 * Get Add Items
		 */
		include_once($eqdkp->root_path."plugins/".$pm->get_data("ctrt","path")."/admin/dao/items.php");
		$daoAddItem = new CTRT_Items;

		$addItems = $daoAddItem->getRecord(array('items_ctrt_type'=>CTRT_ADD_ITEM));
		$this->_ctrt_settings['AlwaysAddItems'] = array();
		foreach ($addItems as $addItem) {
			$this->_ctrt_settings['AlwaysAddItems'][] = $addItem['items_wowid'];
		}

		/**
		 * Get Ignore Items
		 */
		include_once($eqdkp->root_path."plugins/".$pm->get_data("ctrt","path")."/admin/dao/items.php");
		$daoIgnoreItem = new CTRT_Items;

		$ignoreItems = $daoIgnoreItem->getRecord(array('items_ctrt_type'=>CTRT_IGNORE_ITEM));
		$this->_ctrt_settings['IgnoreItems'] = array();
		foreach ($ignoreItems as $ignoreItem) {
			$this->_ctrt_settings['IgnoreItems'][] = $ignoreItem['items_wowid'];
		}
	}

	function GetRaidNoteFromString($string)
	{
		$string = stripslashes($string);

		foreach($this->_ctrt_settings['RaidNoteTriggers'] as $trigger => $value)
		{
			if($this->in_string($trigger, $string, true))
			{
				return $value;
			}
		}
		// Unknown is trapped at the other end and the value of "note" is added.
		return "Unknown";
	}

	function GetRaidEventFromString($string)
	{
		foreach($this->_ctrt_settings['EventTriggers'] as $trigger => $value)
		{
			if($this->in_string($trigger, stripslashes($string), true))
			{
				return $value;
			}
		}
		// This is "trapped" at the other end of the call and the value for "zone" is added.
		return "Unknown Event";
	}

	function GetItemName($itemid)
	{
		global $gitemlist, $itemidtoname;
		if(empty($gitemlist) && file_exists("itemlist.xml"))
		{
			$itemlisthandle = fopen("itemlist.xml", "r");
			while(!feof($itemlisthandle))
			{
				$itemlistbuffer = fgets($itemlisthandle, 1024);
				preg_match_all("/<wowitem name=\"(.+?)\" id=\"(\d+)\" \/>/s", $itemlistbuffer, $itemlista, PREG_SET_ORDER);
				foreach($itemlista as $itemlistdata)
				{
					$gitemlist[$itemlistdata[2]] = $itemlistdata[1];
				}
			}
			fclose($itemlisthandle);
		}
		if(function_exists("GetItemName")) // Just ignore this, it's my part to get the itemname from my database
		{
			$altitemname = @GetItemName($itemid, $lang = "en");
		}
		if(!empty($altitemname))
		{
			return $altitemname;
		}
		elseif(!empty($gitemlist[$itemid]))
		{
			return $gitemlist[$itemid];
		}
		elseif(!empty($itemidtoname[$itemid]))
		{
			return $itemidtoname[$itemid];
		}
		else
		{
			return false;
		}
	}

	function ConvertTimestringToTimestamp($timestring)
	{
		$parts = preg_split('/[\/ :]/', $timestring);
		$timestamp = mktime($parts[3], $parts[4], $parts[5], $parts[0], $parts[1], $parts[2]);
		return $timestamp;
	}

	function in_string($needle, $haystack, $insensitive=false)
	{
		if ($insensitive)
		{
			$haystack = strtolower($haystack);
			$needle = strtolower($needle);
		}
		return (false !== strpos($haystack, $needle)) ? true : false;
	}

	function xml2array($xml)
	{
		$xml = trim($xml);
		$xml = '<?xml version="1.0" encoding="ISO-8859-1" ?>'.$xml;
		$xp = xml_parser_create("");
		xml_parser_set_option($xp, XML_OPTION_CASE_FOLDING, false); // whether or not to upercase chars
		xml_parser_set_option($xp, XML_OPTION_SKIP_WHITE, false);   // whether or not to skip whitespaces
		xml_parser_set_option($xp, XML_OPTION_TARGET_ENCODING, "ISO-8859-1");
		xml_parse_into_struct($xp,trim($xml),$vals,$index);
		xml_parser_free($xp);
		$_data = NULL;
		$temp = $depth = array();
		$dc = array();

		foreach($vals as $value)
		{
			$p = join('::', $depth);
			$key = $value['tag'];
			switch ($value['type'])
			{
				case 'open':
					array_push($depth, $key);
					array_push($depth, (int)$dc[$p]++);
					break;
				case 'complete':
					array_pop($depth);
					array_push($depth, $key);
					$p = join('::',$depth);
					$temp[$p] = $value['value'];
					array_pop($depth);
					array_push($depth, (int)$dc[$p]);
					break;
				case 'close':
					array_pop($depth);
					array_pop($depth);
					break;
			}
		}
		foreach($temp as $key=>$value)
		{
			$levels = explode('::',$key);
			$num_levels = count($levels);
			if ($num_levels==1)
			{
				$_data[$levels[0]] = $value;
			}
			else
			{
				$pointer = &$_data;
				for ($i = 0; $i < $num_levels; $i++)
				{
					if (!isset($pointer[$levels[$i]]))
					{
						$pointer[$levels[$i]] = array();
					}
					$pointer = &$pointer[$levels[$i]];
				}
				$pointer = $value;
			}

		}
		return ($_data);
	}

	function GetMainItemId($itemid)
	{
		$itemid = trim($itemid, "item:");
		$itemid = preg_split("/:/", $itemid);
		return $itemid[0];
	}

	function GetItemQualityByColor($color)
	{
		$quality = -1;
		$color = strtolower($color);

		switch ($color) {
			case "ffff8000":    $quality = CTRT_IQ_LEGENDARY; break;
			case "ffa335ee":    $quality = CTRT_IQ_EPIC; break;
			case "ff0070dd":    $quality = CTRT_IQ_RARE; break;
			case "ff1eff00":    $quality = CTRT_IQ_UNCOMMON; break;
			case "ffffffff":    $quality = CTRT_IQ_COMMON; break;
			case "ff9d9d9d":    $quality = CTRT_IQ_POOR; break;
		}

		return $quality;
	}

	function GetMemberWrs($memberName)
	{
		global $db;

		$sql = "SELECT *, (member_earned-member_spent+member_adjustment) AS member_current
            FROM " . MEMBERS_TABLE . "
            WHERE member_name = '" . $memberName . "'";  

		$result = $db->query($sql);
		$value = $db->fetch_record($value);

		//echo "<br>    Member Current Value in GetMemberWrs: " . $value['member_current'];

		if ($db->num_rows($result) > 0)
		return $value['member_current'];
		else
		return -1;
	}

	// The original called function was GetDkpValue (below) to return the min value of the
	// item in the table.  This new function gets the current DKP value for a member and
	// then calculates the WRS cost based upon the member's current WRS.
	function CalcWRSValue($item, $memberName, $raidValue)
	{
		global $db;

		//$value = $db->query("SELECT MIN(`item_value`) as minval FROM ".ITEMS_TABLE." WHERE `item_name` = '".mysql_real_escape_string($item)."';");
		//$value = $db->fetch_record($value);
		//if(!is_numeric($value['minval']))
		//{
		//    return $this->_ctrt_settings['DefaultDKPCost'];
		//}
		//else
		//{
		$memberWRSVal = $this->GetMemberWrs($memberName);
		 
		if ($memberWRSVal == -1)
		{
			return $raidValue;
		}
		elseif ($memberWRSVal > 100)
		{
			$finalWR = ($memberWRSVal + $raidValue - 100) / 2;
			$itemCost = $memberWRSVal - $finalWR;
			return $itemCost;
		}
		else
		return $memberWRSVal + $raidValue;
		//}
	}

	function GetDkpValue($item)
	{
		global $db;
		$value = $db->query("SELECT MIN(`item_value`) as minval FROM ".ITEMS_TABLE." WHERE `item_name` = '".mysql_real_escape_string($item)."';");
		$value = $db->fetch_record($value);
		if(!is_numeric($value['minval']))
		{
			return $this->_ctrt_settings['DefaultDKPCost'];
		}
		else
		{
			return $value['minval'];
		}
	}

	function GetClassIdByClassNameLevel($classname, $level)
	{
		global $db, $user;

		$sql = 'SELECT `class_id`
                  FROM '.CLASS_TABLE.'
                 WHERE `class_name` = \''.mysql_real_escape_string(ucwords($user->lang[strtolower($classname)])).'\'
                   AND `class_min_level` <= \''.mysql_real_escape_string($level).'\'
                   AND `class_max_level` >= \''.mysql_real_escape_string($level).'\'
              ORDER BY class_min_level DESC;';

		$value = $db->query($sql);
		if($db->num_rows($value) >= 1)
		{
			$value = $db->fetch_record($value);
			return $value['class_id'];
		}
		else
		{
			return 0;
		}
	}

	function GetRaceIdByRaceName($RaceName)
	{
		global $db, $user;
		$RaceID = -1;

		switch ($RaceName) {
			case RACE_NAME_BLOOD_ELF:   $RaceName = $user->lang['blood_elf']; break;
			case RACE_NAME_DRAENEI:     $RaceName = $user->lang['draenei']; break;
			case RACE_NAME_DWARF:       $RaceName = $user->lang['dwarf']; break;
			case RACE_NAME_GNOME:       $RaceName = $user->lang['gnome']; break;
			case RACE_NAME_HUMAN:       $RaceName = $user->lang['human']; break;
			case RACE_NAME_NIGHT_ELF:   $RaceName = $user->lang['night_elf']; break;
			case RACE_NAME_ORC:         $RaceName = $user->lang['orc']; break;

			case RACE_NAME_UNDEAD:
			case RACE_NAME_SCOURGE:     $RaceName = $user->lang['undead']; break;

			case RACE_NAME_TAUREN:      $RaceName = $user->lang['tauren']; break;
			case RACE_NAME_TROLL:       $RaceName = $user->lang['troll']; break;
		}

		$sql = 'SELECT `race_id`
                  FROM '.RACE_TABLE.'
                 WHERE `race_name` = \''.mysql_real_escape_string($RaceName).'\'';

		$value = $db->query($sql);
		if($db->num_rows($value) >= 1)
		{
			$value = $db->fetch_record($value);
			$RaceID = $value['race_id'];
		}

		return $RaceID;
	}

	function GetRankIdByRankName($rankname)
	{
		global $db;
		$value = $db->query("SELECT `rank_id` FROM ".MEMBER_RANKS_TABLE." WHERE `rank_name` = '".mysql_real_escape_string($rankname)."';");
		if($db->num_rows($value) >= 1)
		{
			$value = $db->fetch_record($value);
			return $value['rank_id'];
		}
		else
		{
			return 0;
		}
	}

	function GetClassNameByClassId($classid)
	{
		global $db;
		$value = $db->query("SELECT `class_name` FROM ".CLASS_TABLE." WHERE `class_id` = '".mysql_real_escape_string($classid)."';");
		if($db->num_rows($value) >= 1)
		{
			$value = $db->fetch_record($value);
			return $value['class_name'];
		}
		else
		{
			return "Unknown";
		}
	}

	function GetRaceNameByRaceId($raceid)
	{
		global $db;
		$value = $db->query("SELECT `race_name` FROM ".RACE_TABLE." WHERE `race_id` = '".mysql_real_escape_string($raceid)."';");
		if($db->num_rows($value) >= 1)
		{
			$value = $db->fetch_record($value);
			return $value['race_name'];
		}
		else
		{
			return "Unknown";
		}
	}

	function GetRankNameByRankId($rankid)
	{
		global $db;
		$value = $db->query("SELECT `rank_name` FROM ".MEMBER_RANKS_TABLE." WHERE `rank_id` = '".mysql_real_escape_string($rankid)."';");
		if($db->num_rows($value) >= 1)
		{
			$value = $db->fetch_record($value);
			if(!empty($value['rank_name']))
			{
				return $value['rank_name'];
			}
			else
			{
				return "None";
			}
		}
		else
		{
			return "None";
		}
	}

	function GenerateUniqId()
	{
		return md5(uniqid(rand(), true));
	}

	function StripUniqIdFromString($string)
	{
		return preg_replace("/(.*?)-[a-z0-9]{32}-(.*?)/", "\\1\\2", $string);
	}

	function StripSpecialChars($string)
	{
		$string = strtr($string, "\xA1\xAA\xBA\xBF\xC0\xC1\xC2\xC3\xC5\xC7\xC8\xC9\xCA\xCB\xCC\xCD\xCE\xCF\xD0\xD1\xD2\xD3\xD4\xD5\xD8\xD9\xDA\xDB\xDD\xE0\xE1\xE2\xE3\xE5\xE7\xE8\xE9\xEA\xEB\xEC\xED\xEE\xEF\xF0\xF1\xF2\xF3\xF4\xF5\xF8\xF9\xFA\xFB\xFD\xFF", "!ao?AAAAACEEEEIIIIDNOOOOOUUUYaaaaaceeeeiiiidnooooouuuyy");
		$string = strtr($string, array("\xC4"=>"Ae", "\xC6"=>"AE", "\xD6"=>"Oe", "\xDC"=>"Ue", "\xDE"=>"TH", "\xDF"=>"ss", "\xE4"=>"ae", "\xE6"=>"ae", "\xF6"=>"oe", "\xFC"=>"ue", "\xFE"=>"th"));
		return($string);
	}

	function process_parse()
	{
		# Declare Variables
		global $db, $eqdkp, $user, $tpl, $pm;
		global $SID;
		global $itemidtoname;

		# Input Cleanup
		$_POST['log'] = trim(str_replace("&", "and", html_entity_decode($_POST['log'])));

		# Basic xml validation
		if(!preg_match("/<RaidInfo>(:?<Version>.*?<\/Version>)?<key>.*?<\/key>.*?<Join>.*?<\/Join><Leave>.*?<\/Leave><Loot>.*?<\/Loot><\/RaidInfo>/s", $_POST['log']))
		{
			message_die($user->lang['ctrt_step1_invalidstring_msg'], $user->lang['ctrt_step1_invalidstring_title']);
		}

		#Initialize arrrays
		$allraids = array();
		$allevents = array();
		$allraidattendees = array();
		$itemidtoname = array();
		$dkpinfo = array();
		$adata = $this->xml2array($_POST['log']);
		$globalevent = $this->GetRaidEventFromString($adata['RaidInfo']['note']);
		if ($globalevent == "Unknown Event")
		$globalevent = $adata['RaidInfo']['zone'];
		$globalraidnote = $this->GetRaidNoteFromString($adata['RaidInfo']['note']);
		if ($globalraidnote == "Unknown")
		$globalraidnote = $adata['RaidInfo']['note'];
		$globalraidstart = $this->ConvertTimestringToTimestamp($adata['RaidInfo']['start']);
		# Set Join Times for Players
		if($allforeachdata = @array_shift($adata['RaidInfo'][0]['Join']))
		{
			foreach($allforeachdata as $playerdata)
			{
				# Convert Names, Set Timestamp, Initialize the Player Data
				$playerdata['time'] = $this->ConvertTimestringToTimestamp($playerdata['time']);
				if(!empty($this->_ctrt_settings['PlayerAliases'][$playerdata['player']]))
				{
					$playerdata['player'] = $this->_ctrt_settings['PlayerAliases'][$playerdata['player']];
				}
				if($this->_ctrt_settings['ConvertNames'])
				{
					$playerdata['player'] = $this->StripSpecialChars($playerdata['player']);
				}
				if(!isset($allattendees[$playerdata['player']]))
				{
					$allattendees[$playerdata['player']] = array("race" => 0, "class" => 0, "level" => 0);
				}

				# Set Class, Race, Level if available and not set
				if(!empty($playerdata['race']) && empty($allattendees[$playerdata['player']]['race'])) { $allattendees[$playerdata['player']]['race'] = $this->GetRaceIdByRaceName($playerdata['race']); }
				if(!empty($playerdata['class']) && empty($allattendees[$playerdata['player']]['class'])) { $allattendees[$playerdata['player']]['class'] = $this->GetClassIdByClassNameLevel($playerdata['class'], $playerdata['level']); }
				if(!empty($playerdata['level']) && $allattendees[$playerdata['player']]['level'] < $playerdata['level']) { $allattendees[$playerdata['player']]['level'] = $playerdata['level']; }
				 
				// Check if Player Note exists and contains a "WRS" string.
				// If so this should be the WRS used for that player for the night.
				if(isset($playerdata['note']) && !empty($playerdata['note']) &&
				empty($allattendees[$playerdata['player']]['note']))
				{
					$allattendees[$playerdata['player']]['note'] = $playerdata['note'];
					//@@@ If note contains "WRS" as value, set player WRS field and adjustment note if applicable.
					if(!empty($playerdata['note']))
					{
						preg_match("/([\d\.]+) WRS/", $playerdata['note'], $dkpinfo);
						if(isset($dkpinfo[1]))
							$allattendees[$playerdata['player']]['dkp'] = $dkpinfo[1];
						preg_match("/:(.*):/", $playerdata['note'], $adjnote);
						if(isset($adjnote[1]))
							$allattendees[$playerdata['player']]['adjustment'] = $adjnote[1];
					}
				}
				 
				# Add the Join Time to the array of leave/join times
				if(empty($allattendees[$playerdata['player']]['time'])) $allattendees[$playerdata['player']]['time'] = array();
				$allattendees[$playerdata['player']]['time'][]['join'] = $playerdata['time'];
			}

			# Set Leave Times for Players
			if($allforeachdata = @array_shift($adata['RaidInfo'][0]['Leave'])) 
				foreach($allforeachdata as $playerdata)
				{
					# Convert Names, Set Timestamp
					$playerdata['time'] = $this->ConvertTimestringToTimestamp($playerdata['time']);
					if(!empty($this->_ctrt_settings['PlayerAliases'][$playerdata['player']]))
					{
						$playerdata['player'] = $this->_ctrt_settings['PlayerAliases'][$playerdata['player']];
					}
					if($this->_ctrt_settings['ConvertNames'])
					{
						$playerdata['player'] = $this->StripSpecialChars($playerdata['player']);
					}
	
					# Add the Leave Time to the array of leave/join times
					$i = 0;
					if(!empty($allattendees[$playerdata['player']]['time'])) foreach( $allattendees[$playerdata['player']]['time'] as $playerjoindata )
					{
						if( empty($playerjoindata['leave']) )
						{
							$allattendees[$playerdata['player']]['time'][$i]['leave'] = $playerdata['time'];
							break;
						}
						$i++;
					}
				} //end FOREACH
			//End Logical IF (no {} - $allforeachdata = @array_shift) 
		} // end IF

		#print_r(print_r_string($allattendees));

		# Pull the BossKills off the input
		$allforeachbosskills = @array_shift($adata['RaidInfo'][0]['BossKills']);
		# Walk the loot
		$i = 0;
		$allforeachdata = @array_shift($adata['RaidInfo'][0]['Loot']);
		if(!empty($allforeachdata)) foreach($allforeachdata as $lootdata)
		{
			# Rename by players alias and convert names
			if(!empty($this->_ctrt_settings['PlayerAliases'][$lootdata['Player']])) {
				$lootdata['Player'] = $this->_ctrt_settings['PlayerAliases'][$lootdata['Player']];
			}
			if($this->_ctrt_settings['ConvertNames']) {
				$lootdata['Player'] = $this->StripSpecialChars($lootdata['Player']);
			}

			#Set item information
			$itemid = $this->GetMainItemId($lootdata['ItemID']);
			$itemidtoname[$itemid] = str_replace("\\'", "'", $lootdata['ItemName']);
			$allloot[$i]['itemid'] = $itemid;
			$allloot[$i]['name'] = $this->GetItemName($itemid);
			$allloot[$i]['quality'] = $this->GetItemQualityByColor($lootdata['Color']);
			$allloot[$i]['looter'] = ucwords($lootdata['Player']);
			$allloot[$i]['time'] = $this->ConvertTimestringToTimestamp($lootdata['Time']);
			$lootraidnote = $this->GetRaidNoteFromString($lootdata['Note']);
			$lootraidevent = $this->GetRaidEventFromString($lootdata['Note']);

			if(!empty($lootraidnote) && $lootraidnote != "Unknown") { $alllootraidnote = $lootraidnote; }
			else { $alllootraidnote = $globalraidnote; }
			if(!empty($lootraidevent) && $lootraidevent != "Unknown Event" && $this->_ctrt_settings['LootNoteEventTriggerCheck']) { $alllootraidevent = $lootraidevent; }
			else { $alllootraidevent = $globalevent; }

			if(!in_array($alllootraidevent, $allevents)) { $allevents[] = $alllootraidevent; }
			if(in_array($alllootraidnote, $this->_ctrt_settings['OwnRaids'])) {$alllootraidnote = $alllootraidnote."-".$this->GenerateUniqId()."-"; }
			$allloot[$i]['raidnote'] = $alllootraidnote;
			$allloot[$i]['raidevent'] = $alllootraidevent;
			if(!isset($allraids[$alllootraidnote])) { $allraids[$alllootraidnote] = array(); }
			if(!isset($allraids[$alllootraidevent][$alllootraidnote])) { $allraids[$alllootraidevent][$alllootraidnote] = $allloot[$i]['time']; }
			#$allloot[$i]['dkp'] = $this->_ctrt_settings['DefaultDKPCost'];
			if(!empty($lootdata['Note']))
			{
				preg_match("/([\d\.]+) WRS/", $lootdata['Note'], $dkpinfo);
				if(!empty($dkpinfo[1]) || $dkpinfo[1] == "0")
				{
					$allloot[$i]['dkp'] = $dkpinfo[1];
				}
			}

			//print_r($allattendees);
			# If attendance mode is not mode 2 then we set attendance by loot time
			if ( $this->_ctrt_settings['AttendanceFilter'] != CTRT_AF_BOSS_KILL )
			{
				# Add Players in the raid at the time of the loot to the event the loot is associated with
				foreach($allattendees as $player => $times)
				{
					# Filter mode 0 = add attendees to all events
					if( $this->_ctrt_settings['AttendanceFilter'] == CTRT_AF_NONE )
					{
						$allloot[$i]['attendees'][] = $player;
						if (isset($allattendees[$player]['dkp']))
							$allraidattendees[$alllootraidevent][$alllootraidnote][] = $player . " - " . $allattendees[$player]['dkp'];
						else
							$allraidattendees[$alllootraidevent][$alllootraidnote][] = $player;
						continue;
					}

					# Filter mode 1 = Check to see who was there at the time of looting and then add them to the event
					foreach($times['time'] as $inraid)
					{
						if( $inraid['join'] <= $allloot[$i]['time'] && ( $inraid['leave'] >= $allloot[$i]['time'] || empty($inraid['leave']) ) )
						{
							$allloot[$i]['attendees'][] = $player;
							if (isset($allattendees[$player]['dkp']))
								$allraidattendees[$alllootraidevent][$alllootraidnote][] = $player . " - " . $allattendees[$player]['dkp'];
							else
								$allraidattendees[$alllootraidevent][$alllootraidnote][] = $player;
						}
					}
				}
			}
			else # Filter mode 2 = Determine who was present when the boss died ( assuming a boss is associated with the event )
			{
				#Determine if a boss is associated with the event
				$bosskilltime = false;
				if(!empty($allforeachbosskills)) foreach($allforeachbosskills as $bosskilldata)
				{
					if ( $bosskilldata['name'] == $alllootraidevent )
					{
						$bosskilltime = $this->ConvertTimestringToTimestamp($bosskilldata['time']);
						break;
					}
				}

				# If no boss kill time found associated with the event check if one is
				# associated with the raid note ( some guilds do the boss kill as a raid note )
				if ( !$bosskilltime )
				{
					#Determine if a boss is associated with the raid note
					if(!empty($allforeachbosskills)) foreach($allforeachbosskills as $bosskilldata)
					{
						if ( $this->GetRaidNoteFromString($bosskilldata['name']) == $alllootraidnote )
						{
							$bosskilltime = $this->ConvertTimestringToTimestamp($bosskilldata['time']);
							break;
						}
					}
				}

				# If a boss was associated and a kill time found
				if ( $bosskilltime )
				{
					foreach($allattendees as $player => $times)
					{
						if (!empty($times['time'])) foreach($times['time'] as $inraid)
						{
							if( $inraid['join'] <= $bosskilltime && ( $inraid['leave'] >= $bosskilltime || empty($inraid['leave']) ) )
							{
								$allloot[$i]['attendees'][] = $player;
								if (isset($allattendees[$player]['dkp']))
									$allraidattendees[$alllootraidevent][$alllootraidnote][] = $player . " - " . $allattendees[$player]['dkp'];
								else
									$allraidattendees[$alllootraidevent][$alllootraidnote][] = $player;
							}
						}
					}
				}
				else # no boss? Add everyone to the event
				{
					foreach($allattendees as $player => $times)
					{
						$allloot[$i]['attendees'][] = $player;
						//                        if (isset($player['dkp']))
						if (isset($allattendees[$player]['dkp']))
							$allraidattendees[$alllootraidevent][$alllootraidnote][] = $player . " - " . $allattendees[$player]['dkp'];
						else
							$allraidattendees[$alllootraidevent][$alllootraidnote][] = $player;
					}
				}
			}

			# Update the event loot now that all the information about the looting has been determined
			$allraidattendees[$alllootraidevent][$alllootraidnote] = array_unique($allraidattendees[$alllootraidevent][$alllootraidnote]);
			sort($allraidattendees[$alllootraidevent][$alllootraidnote]);

			$i++;
		}

		if ( $this->_ctrt_settings['CreateStartRaid'] && $this->_ctrt_settings['AttendanceFilter'] == CTRT_AF_BOSS_KILL )
		{
			foreach ($allattendees as $player => $times)
			{
				foreach($times['time'] as $inraid)
				{
					if( $inraid['join'] <= $globalraidstart && ( $inraid['leave'] >= $globalraidstart || empty($inraid['leave']) ) )
					{
						$startraidattendees[$alllootraidevent][] = $player;
					}
				}
			}
		}
		#print_r(print_r_string($allattendees));

		if(empty($allforeachdata))
		{
			if(!in_array($globalevent, $allevents)){ $allevents[] = $globalevent; }
			if(!isset($allraids[$globalraidnote])) { $allraids[$globalraidnote] = array(); }
			foreach($allattendees as $player => $times)
			{
				if (isset($allattendees[$player]['dkp']))
					$allraidattendees[$globalevent][$globalraidnote][] = $player . " - " . $allattendees[$player]['dkp'];
				else
					$allraidattendees[$globalevent][$globalraidnote][] = $player;
			}

			# Ensure no duplicates
			$allraidattendees[$globalevent][$globalraidnote] = array_unique($allraidattendees[$globalevent][$globalraidnote]);
			sort($allraidattendees[$globalevent][$globalraidnote]);

			if(!isset($allraids[$globalevent][$globalraidnote]))
			{
				$allraids[$globalevent][$globalraidnote] = $this->ConvertTimestringToTimestamp($adata['RaidInfo']['key']);
			}
		}

		$tpl->assign_vars(array(
            'S_STEP1'         => false,
            'L_FOUND_RAIDS' => $user->lang['ctrt_step2_foundraids'],
            'L_EVENT' => $user->lang['ctrt_step2_event'],
            'L_RAID_NOTE' => $user->lang['ctrt_step2_raidnote'],
            'L_DKP_VALUE' => $user->lang['ctrt_step2_dkpvalue'],
            'L_RAID_TIME' => $user->lang['ctrt_step2_raidtime'],
            'L_ATTENDEES' => $user->lang['ctrt_step2_attendees'],
            'L_ITEM_NAME' => $user->lang['ctrt_step2_itemname'],
            'L_ITEM_ID' => $user->lang['ctrt_step2_itemid'],
            'L_ITEM_LOOTER' => $user->lang['ctrt_step2_looter'],
            'L_ITEM_DKP_VALUE' => $user->lang['ctrt_step2_itemdkpvalue'],
            'L_ITEM_ID' => $user->lang['ctrt_step2_itemid'],
            'L_RAIDS_DROPS_DETAILS'  => $user->lang['ctrt_step2_raidsdropsdetails'],
            'L_RAIDS_INSERT'  => $user->lang['ctrt_step2_insertraids'],
            'L_DKP_VALUE_TIP' => $user->lang['ctrt_step2_dkpvaluetip'],
            'S_ADDLOOTDKPVALUES' => (($this->_ctrt_settings['AddLootDkpValuesCheckbox']) ? true : false),
		)
		);
		foreach($allattendees as $playername => $playerdata)
		{
			$tpl->assign_block_vars('allplayers_row', array(
                        'ALLPLAYERNAME' => $playername,
                        'ALLPLAYERRACE' => $playerdata['race'],
                        'ALLPLAYERCLASS' => $playerdata['class'],
                        'ALLPLAYERLEVEL' => $playerdata['level'],
						'ALLPLAYERDKP' => $playerdata['dkp'],
						'ALLPLAYERADJ' => $playerdata['adjustment'],
			));
		}

		foreach($allevents as $hevent)
		{
			$tpl->assign_block_vars('events_row', array(
                'HEVENT' => $hevent,
                'STRIPPEDHEVENT' => $this->StripUniqIdFromString($hevent),
			));
			if ( $this->_ctrt_settings['CreateStartRaid'] && $this->_ctrt_settings['AttendanceFilter'] == CTRT_AF_BOSS_KILL )
			{
				$STRIPPEDHRAIDNOTE = $this->StripUniqIdFromString('On Time');
				$tpl->assign_block_vars('events_row.raids_row', array(
                    'ROW_CLASS' => $eqdkp->switch_row_class(),
                    'HRAIDNOTE' => 'On Time',
                    'HRAIDTIME' => $globalraidstart,
                    'HRAIDTIME_MO' => date("m", $globalraidstart),
                    'HRAIDTIME_D' => date("d", $globalraidstart),
                    'HRAIDTIME_Y' => date("Y", $globalraidstart),
                    'HRAIDTIME_H' => date("H", $globalraidstart),
                    'HRAIDTIME_MI' => date("i", $globalraidstart),
                    'HRAIDTIME_S' => date("s", $globalraidstart),
                    'STRIPPEDHRAIDNOTE' => (($STRIPPEDHRAIDNOTE == "Unknown") ? "" : $STRIPPEDHRAIDNOTE),
                    'RAIDDKPVALUE' => $this->_ctrt_settings['StartRaidDKP'],
                    'ATTENDEES' => @implode("\n", $startraidattendees[$hevent]),
                    'ATTENDEESCOUNT' => @count($startraidattendees[$hevent]),
				));

			}
			foreach($allraids[$hevent] as $hraidnote => $hraidtime)
			{
				$eventvalue = $db->query("SELECT `event_value` FROM ".EVENTS_TABLE." WHERE event_name = '".mysql_real_escape_string($hevent)."' LIMIT 1");
				$eventvalue = $db->fetch_record($eventvalue);
				// Check if Raid Note: XXX WRS has been set, if so use this value
				//    otherwise use $eventvalue['event_value'] for WRS value.
				if(!empty($globalraidnote))
				{
					preg_match("/([\d\.]+) WRS/", $globalraidnote, $dkpinfo);
					if(!empty($dkpinfo[1]) || $dkpinfo[1] == "0")
					{
						$eventvalue = $dkpinfo[1];
					}
					else
					$eventvalue = $eventvalue['event_value'];
				}

				if($eventvalue <= 0)
				{
					$eventvalue = "";
				}
				$STRIPPEDHRAIDNOTE = $this->StripUniqIdFromString($hraidnote);
				$tpl->assign_block_vars('events_row.raids_row', array(
                    'ROW_CLASS' => $eqdkp->switch_row_class(),
                    'HRAIDNOTE' => $hraidnote,
                    'HRAIDTIME' => $hraidtime,
                    'HRAIDTIME_MO' => date("m", $hraidtime),
                    'HRAIDTIME_D' => date("d", $hraidtime),
                    'HRAIDTIME_Y' => date("Y", $hraidtime),
                    'HRAIDTIME_H' => date("H", $hraidtime),
                    'HRAIDTIME_MI' => date("i", $hraidtime),
                    'HRAIDTIME_S' => date("s", $hraidtime),
                    'STRIPPEDHRAIDNOTE' => (($STRIPPEDHRAIDNOTE == "Unknown") ? "" : $STRIPPEDHRAIDNOTE),
                    'RAIDDKPVALUE' => $eventvalue,
                    'ATTENDEES' => @implode("\n", $allraidattendees[$hevent][$hraidnote]),
                    'ATTENDEESCOUNT' => @count($allraidattendees[$hevent][$hraidnote]),
				));
				$i = 0;
				$hraidattendees = array();
				if(!isset($allloot)) { $allloot = array(); }
				foreach($allloot as $hlootid => $hlootdata)
				{
					if($hlootdata['raidnote'] == $hraidnote && $hlootdata['raidevent'] == $hevent)
					{
						if(($hlootdata['quality'] >= $this->_ctrt_settings['MinItemQuality']) && !in_array($hlootdata['itemid'], $this->_ctrt_settings['IgnoreItems']) && (strtolower($hlootdata['looter']) != strtolower($this->_ctrt_settings['IgnoredLooter']) || empty($this->_ctrt_settings['IgnoredLooter'])) || in_array($hlootdata['itemid'], $this->_ctrt_settings['AlwaysAddItems']))
						{
							// Original code that got item value with call to GetDkpValue();
							//$tpl->assign_block_vars('events_row.raids_row.loot_row', array(
							//    'HNR' => $i,
							//    'HNAME' => $hlootdata['name'],
							//    'HID' => $hlootdata['itemid'],
							//    'HLOOTER' => $hlootdata['looter'],
							//    'HDKP' => ((!empty($hlootdata['dkp']) || $hlootdata['dkp'] == "0") ? $hlootdata['dkp'] : $this->GetDkpValue($hlootdata['name'])),
							//    'STRIPPEDHRAIDNOTE' => $this->StripUniqIdFromString($hraidnote),
							//));

							// New Code to get WRS Value by Member WRS.
							//echo "<br>Checking DKP Information for User: " . $hlootdata['looter'];
							if(isset($allattendees[$hlootdata['looter']]['dkp']))
							{
								//echo "<br>     Special DKP allocated, value: " . $allattendees[$hlootdata['looter']]['dkp'];
								$itemDKPBase = $allattendees[$hlootdata['looter']]['dkp'];
							}
							else
							{
								//echo "<br>      No Special DKP allocated, item value: " . $eventvalue;
								$itemDKPBase = $eventvalue;
							}
							$tpl->assign_block_vars('events_row.raids_row.loot_row', array(
                                'HNR' => $i,
                                'HNAME' => $hlootdata['name'],
                                'HID' => $hlootdata['itemid'],
                                'HLOOTER' => $hlootdata['looter'],
                                'HDKP' => $this->CalcWRSValue($hlootdata['name'], $hlootdata['looter'], $itemDKPBase),
                                'STRIPPEDHRAIDNOTE' => $this->StripUniqIdFromString($hraidnote),
							));
						}
					}
					$i++;
				}
			}
		}

		$eqdkp->set_vars(array(
            'page_title'        => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['ctrt_step2_pagetitle'],
            'template_path'         => $pm->get_data('ctrt', 'template_path'),
            'template_file'     => 'ctrt.html',
            'display'           => true,
		)
		);
	}

	function insert_log()
	{
		global $db, $eqdkp, $user, $tpl, $pm;
		global $SID;
		$parsename = array();
		
		$a = 0;
		foreach($_POST['events'] as $ievent)
		{
			$inewevent = $_POST['newevents'][$ievent];
			foreach($_POST['raids'][$ievent] as $iraid => $iraidtime)
			{
				$inewraidtime = mktime($_POST['raidtimes'][$ievent][$iraid]['h'], $_POST['raidtimes'][$ievent][$iraid]['mi'], $_POST['raidtimes'][$ievent][$iraid]['s'], $_POST['raidtimes'][$ievent][$iraid]['mo'], $_POST['raidtimes'][$ievent][$iraid]['d'], $_POST['raidtimes'][$ievent][$iraid]['y']);
				$inewraidnote = stripslashes($_POST['newraidnotes'][$ievent][$iraid]);
				$inewraidattendees = trim($_POST['newraidattendees'][$ievent][$iraid]);
				$iallraids[$a]['event'] = $inewevent;
				$iallraids[$a]['raidnote'] = $inewraidnote;
				$iallraids[$a]['time'] = $inewraidtime;
				$iallraids[$a]['dkp'] = 0;
				$iallraids[$a]['attendees'] = explode("\n", $inewraidattendees);
				if(empty($inewraidattendees))
				{
					$iallraids[$a]['donotadd'] = true;
				}
				else
				{
					$iallraids[$a]['donotadd'] = false;
				}
				$iallraids[$a]['loots'] = array();
				$i = 0;
				if(!isset($_POST['loots'][$ievent][$iraid])) {$_POST['loots'][$ievent][$iraid] = array();   }
				foreach($_POST['loots'][$ievent][$iraid] as $ilootdata)
				{
					if((!empty($ilootdata['dkp']) || $ilootdata['dkp'] == "0") && !empty($ilootdata['name']))
					{
						$iallraids[$a]['loots'][$i]['name'] = str_replace("\\'", "'", $ilootdata['name']);
						$iallraids[$a]['loots'][$i]['id'] = $ilootdata['id'];
						$iallraids[$a]['loots'][$i]['looter'] = str_replace("\\'", "'", ucwords($ilootdata['looter']));
						$iallraids[$a]['loots'][$i]['dkp'] = $ilootdata['dkp'];
						$iallraids[$a]['dkp'] += $ilootdata['dkp'];
					}
					$i++;
				}
				$iallraids[$a]['dkp'] = round($iallraids[$a]['dkp'] / count($iallraids[$a]['attendees']), 2);
				if($_POST['addlootdkpvalues'][$ievent][$iraid] == 1)
				{
					$iallraids[$a]['dkp'] += intval($_POST['raiddkpvalues'][$ievent][$iraid]);
				}
				else
				{
					$iallraids[$a]['dkp'] =intval($_POST['raiddkpvalues'][$ievent][$iraid]);
				}
				foreach($iallraids[$a]['attendees'] as $attendeeid => $attendeename)
				{
					$attendeename = trim($attendeename);
					// Parse the <name> - <wrs> string and pull out only the name.
					preg_match("/(.*) - ([\d]+)/", $attendeename, $parsename);
					if(isset($parsename[1]))
						$attendeename = $parsename[1];

					if(!empty($attendeename))
					{
						$iallraids[$a]['attendees'][$attendeeid] = $attendeename;
					}
					else
					{
						unset($iallraids[$a]['attendees'][$attendeeid]);
					}
				}
				$a++;
			}
		}
		$text == "";

		// Call out if this is a simulation
		( $this->_ctrt_settings['OnlySimulate'] ) ? $text .= $user->lang['ctrt_simulate_warning'] : "";

		foreach($iallraids as $iraid)
		{
			if(!$iraid['donotadd'])
			{
				if($iraid['dkp']=='') $iraid['dkp'] = 0;
				$newraidid = $db->query("SELECT MAX(`raid_id`) as id FROM ".RAIDS_TABLE.";");
				$newraidid = $db->fetch_record($newraidid);
				$newraidid = $newraidid['id'] + 1;
				$alreadyexistscheck = $db->query("SELECT `raid_name`, `raid_date`, `raid_note`, `raid_value` FROM ".RAIDS_TABLE." WHERE raid_name = '".mysql_real_escape_string($iraid['event'])."' AND raid_date >= '".mysql_real_escape_string($iraid['time']-180)."' AND raid_date <= '".mysql_real_escape_string($iraid['time']+180)."' AND raid_note = '".mysql_real_escape_string($iraid['raidnote'])."' LIMIT 1");
				if($db->num_rows($alreadyexistscheck) == 1 && !$this->_ctrt_settings['OnlySimulate'])
				{
					$text .= sprintf($user->lang['ctrt_step3_alreadyexist'], $iraid['raidnote'], $iraid['event'], $iraid['dkp'])."<br>\n";
				}
				elseif(empty($iraid['raidnote']) && $this->_ctrt_settings['SkipRaidsWithEmptyNote'])
				{
					$text .= sprintf($user->lang['ctrt_step3_emptyraidnote'], $iraid['raidnote'], $iraid['event'], $iraid['dkp'])."<br>\n";
				}
				elseif(!empty($iraid['event']))
				{
					if(!$this->_ctrt_settings['OnlySimulate']) $db->query("INSERT INTO ".RAIDS_TABLE." (`raid_id`, `raid_name`, `raid_date`, `raid_note`, `raid_value`, `raid_added_by`) VALUES ('".mysql_real_escape_string($newraidid)."', '".mysql_real_escape_string($iraid['event'])."', '".mysql_real_escape_string($iraid['time'])."', '".mysql_real_escape_string($iraid['raidnote'])."', '".mysql_real_escape_string($iraid['dkp'])."', 'RaidTracker (by ".mysql_real_escape_string($user->data['username']).")');");
					$text .= sprintf($user->lang['ctrt_step3_raidadded'], $iraid['raidnote'], stripslashes($iraid['event']), $iraid['dkp']);
					$log_action = array(
                        'header' => '{L_ACTION_RAID_ADDED}',
                        'id'            => $newraidid,
                        '{L_EVENT}'     => stripslashes($iraid['event']),
                        '{L_ATTENDEES}' => trim(implode(', ', $iraid['attendees']), ', '),
                        '{L_NOTE}'      => $iraid['raidnote'],
                        '{L_VALUE}'     => $iraid['dkp'],
                        '{L_ADDED_BY}'  => 'RaidTracker (by '.$user->data['username'].')',
					);
					if(!$this->_ctrt_settings['OnlySimulate']) $this->log_insert(array('log_type'   => $log_action['header'], 'log_action' => $log_action));
					foreach($iraid['attendees'] as $iattendee)
					{
						$memberexistscheck = $db->query("SELECT `member_id`, `member_earned`, `member_spent`, `member_adjustment`, `member_level`, `member_race_id`, `member_class_id`, `member_rank_id` FROM ".MEMBERS_TABLE." WHERE `member_name` = '".mysql_real_escape_string($iattendee)."' LIMIT 1;");
						$lccheck = $db->fetch_record($memberexistscheck);
						if($db->num_rows($memberexistscheck) == 0)
						{
							$iattendeerace = $this->GetRaceNameByRaceId($_POST['allplayers'][$iattendee]['race']);
							$iattendeeclass = $this->GetClassNameByClassId($_POST['allplayers'][$iattendee]['class']);
							$iattendeelevel = ((!empty($_POST['allplayers'][$iattendee]['level'])) ? $_POST['allplayers'][$iattendee]['level'] : "Unknown" ) ;
							$iattendeerank = $this->GetRankIdByRankName($this->_ctrt_settings['NewMemberDefaultRank']) ;

							if (!is_numeric($this->_ctrt_settings['StartingDKP'])) $this->_ctrt_settings['StartingDKP'] = 0;
							$this->_ctrt_settings['StartingDKP'] = intval($this->_ctrt_settings['StartingDKP']);

							if(!$this->_ctrt_settings['OnlySimulate']) $db->query("INSERT INTO ".MEMBERS_TABLE." (`member_name`, `member_adjustment`, `member_status`, `member_firstraid`, `member_level`, `member_rank_id`, `member_class_id`, `member_race_id`) VALUES ('".mysql_real_escape_string($iattendee)."', '".mysql_real_escape_string($this->_ctrt_settings['StartingDKP'])."', '1', '".mysql_real_escape_string($iraid['time'])."', '".mysql_real_escape_string($_POST['allplayers'][$iattendee]['level'])."', '".mysql_real_escape_string($iattendeerank)."', '".mysql_real_escape_string($_POST['allplayers'][$iattendee]['class'])."', '".mysql_real_escape_string($_POST['allplayers'][$iattendee]['race'])."');");
							$text .= sprintf($user->lang['ctrt_step3_memberadded'], $iattendee, $iattendeerace, $iattendeeclass, $iattendeelevel, $this->GetRankNameByRankId($iattendeerank));
							$log_action = array(
                                'header'         => '{L_ACTION_MEMBER_ADDED}',
                                '{L_NAME}'       => $iattendee,
                                '{L_EARNED}'     => 0,
                                '{L_SPENT}'      => 0,
                                '{L_ADJUSTMENT}' => $this->_ctrt_settings['StartingDKP'],
                                '{L_LEVEL}'      => $iattendeelevel,
                                '{L_RACE}'       => $iattendeerace,
                                '{L_CLASS}'      => $iattendeeclass,
                                '{L_ADDED_BY}'   => 'RaidTracker (by '.$user->data['username'].')',
							);
							if(!$this->_ctrt_settings['OnlySimulate']) $this->log_insert(array('log_type' => $log_action['header'],'log_action' => $log_action));

							if ( $this->_ctrt_settings['StartingDKP'] > 0 )
							{
								if(!$this->_ctrt_settings['OnlySimulate']) $db->query("INSERT INTO ".ADJUSTMENTS_TABLE." (`adjustment_value`, `adjustment_date`, `member_name`, `adjustment_reason`, `adjustment_added_by`, `adjustment_group_key`) VALUES ('".mysql_real_escape_string($this->_ctrt_settings['StartingDKP'])."' , '".mysql_real_escape_string($iraid['time'])."' , '".mysql_real_escape_string($iattendee)."' , 'Starting DKP' , 'System' , '".$this->gen_group_key($iraid['time'], "Starting DKP", $this->_ctrt_settings['StartingDKP'])."');");
								$log_action = array(
                                                'header'         => '{L_ACTION_INDIVADJ_ADDED}',
                                                '{L_ADJUSTMENT}' => 5,
                                                '{L_REASON}'     => "Starting DKP",
                                                '{L_MEMBERS}'    => $iattendee,
                                                '{L_ADDED_BY}'   => 'RaidTracker (by '.$user->data['username'].')',
								);
								if (!$this->_ctrt_settings['OnlySimulate']) $this->log_insert(array('log_type'   => $log_action['header'],'log_action' => $log_action));
								$text .= sprintf($user->lang['ctrt_step3_adjadded'], $this->_ctrt_settings['StartingDKP'], $iattendee);
							}
						}
						elseif ( $lccheck['member_class_id'] == '0' || empty($lccheck['member_level']) || $lccheck['member_race_id'] == '0' )
						{
							$previattendeerace = $this->GetRaceNameByRaceId($lccheck['member_race_id']);
							$previattendeeclass = $this->GetClassNameByClassId($lccheck['member_class_id']);
							$previattendeelevel = ((!empty($lccheck['member_level'])) ? $lccheck['member_level'] : "Unknown" ) ;
							$iattendeerank = $this->GetRankNameByRankId($lccheck['member_class_id']);

							$iattendeerace = $this->GetRaceNameByRaceId($_POST['allplayers'][$iattendee]['race']);
							$iattendeeclass = $this->GetClassNameByClassId($_POST['allplayers'][$iattendee]['class']);
							$iattendeelevel = ((!empty($_POST['allplayers'][$iattendee]['level'])) ? $_POST['allplayers'][$iattendee]['level'] : "Unknown" ) ;
							if (!$this->_ctrt_settings['OnlySimulate']) $db->query("UPDATE ".MEMBERS_TABLE." SET member_level = '".mysql_escape_string($_POST['allplayers'][$iattendee]['level'])."', member_race_id = '".mysql_escape_string($_POST['allplayers'][$iattendee]['race'])."', member_class_id = '".mysql_escape_string($_POST['allplayers'][$iattendee]['class'])."' WHERE member_id = '".$lccheck['member_id']."' LIMIT 1");
							$text .= sprintf($user->lang['ctrt_step3_memberupdated'], $iattendee, $previattendeerace, $previattendeeclass, $previattendeelevel, $iattendeerank, $iattendeerace, $iattendeeclass, $iattendeelevel, $iattendeerank);
							$log_action = array('header' => '{L_ACTION_MEMBER_UPDATED}',
                                    '{L_NAME_BEFORE}'       => $iattendee,
                                    '{L_EARNED_BEFORE}'     => $lccheck['member_earned'],
                                    '{L_SPENT_BEFORE}'      => $lccheck['member_spent'],
                                    '{L_ADJUSTMENT_BEFORE}' => $lccheck['member_adjustment'],
                                    '{L_LEVEL_BEFORE}'      => $lccheck['member_level'],
                                    '{L_RACE_BEFORE}'       => $lccheck['member_race_id'],
                                    '{L_CLASS_BEFORE}'      => $lccheck['member_class_id'],
                                    '{L_NAME_AFTER}'        => $iattendee,
                                    '{L_EARNED_AFTER}'      => $lccheck['member_earned'],
                                    '{L_SPENT_AFTER}'       => $lccheck['member_spent'],
                                    '{L_ADJUSTMENT_AFTER}'  => $lccheck['member_adjustment'],
                                    '{L_LEVEL_AFTER}'       => $_POST['allplayers'][$iattendee]['level'],
                                    '{L_RACE_AFTER}'        => $_POST['allplayers'][$iattendee]['race'],
                                    '{L_CLASS_AFTER}'       => $_POST['allplayers'][$iattendee]['class'],
                                    '{L_UPDATED_BY}'        => 'RaidTracker (by '.$user->data['username'].')',
							);
							if (!$this->_ctrt_settings['OnlySimulate']) $this->log_insert(array('log_type'   => $log_action['header'],'log_action' => $log_action));
						}
						elseif ( ($lccheck['member_level'] != $_POST['allplayers'][$iattendee]['level']) && !empty($_POST['allplayers'][$iattendee]['level']) )
						{
							$db->query("UPDATE ".MEMBERS_TABLE." SET `member_level` = '".mysql_escape_string($_POST['allplayers'][$iattendee]['level'])."' WHERE `member_id` = '".$lccheck['member_id']."' LIMIT 1");
							$text .= sprintf($user->lang['ctrt_step3_memberlevelupdated'], $iattendee, $lccheck['member_level'], $_POST['allplayers'][$iattendee]['level']);
							$log_action = array('header' => '{L_ACTION_MEMBER_UPDATED}',
                                    '{L_NAME_BEFORE}'       => $iattendee,
                                    '{L_EARNED_BEFORE}'     => $lccheck['member_earned'],
                                    '{L_SPENT_BEFORE}'      => $lccheck['member_spent'],
                                    '{L_ADJUSTMENT_BEFORE}' => $lccheck['member_adjustment'],
                                    '{L_LEVEL_BEFORE}'      => $lccheck['member_level'],
                                    '{L_RACE_BEFORE}'       => $lccheck['member_race_id'],
                                    '{L_CLASS_BEFORE}'      => $lccheck['member_class_id'],
                                    '{L_NAME_AFTER}'        => $iattendee,
                                    '{L_EARNED_AFTER}'      => $lccheck['member_earned'],
                                    '{L_SPENT_AFTER}'       => $lccheck['member_spent'],
                                    '{L_ADJUSTMENT_AFTER}'  => $lccheck['member_adjustment'],
                                    '{L_LEVEL_AFTER}'       => $_POST['allplayers'][$iattendee]['level'],
                                    '{L_RACE_AFTER}'        => $lccheck['member_race_id'],
                                    '{L_CLASS_AFTER}'       => $lccheck['member_class_id'],
                                    '{L_UPDATED_BY}'        => 'RaidTracker (by '.$user->data['username'].')',
							);
							if (!$this->_ctrt_settings['OnlySimulate']) $this->log_insert(array('log_type'   => $log_action['header'],'log_action' => $log_action));
						}
						//echo "<br>DKP Check for " . $iattendee . ": " . $_POST['allplayers'][$iattendee]['dkp'];
						if (isset($_POST['allplayers'][$iattendee]['dkp']) && $_POST['allplayers'][$iattendee]['dkp'] != "")
						{
							//echo "<br>     DKP Value Set.";
							//$sql = "UPDATE ".MEMBERS_TABLE." SET member_earned = member_earned + ".mysql_real_escape_string($_POST['allplayers'][$iattendee]['dkp']).", member_status = '1', member_lastraid = '".mysql_real_escape_string($iraid['time'])."', member_raidcount = member_raidcount + 1 WHERE member_name = '".mysql_real_escape_string($iattendee)."';";
							if(!$this->_ctrt_settings['OnlySimulate']) $db->query("INSERT INTO ".RAID_ATTENDEES_TABLE." (`raid_id`, `member_name`, `wrs_earned`) VALUES ('".mysql_real_escape_string($newraidid)."', '".mysql_real_escape_string($iattendee)."', '".mysql_real_escape_string($_POST['allplayers'][$iattendee]['dkp'])."');");
							if(!$this->_ctrt_settings['OnlySimulate']) $db->query("UPDATE ".MEMBERS_TABLE." SET member_earned = member_earned + ".mysql_real_escape_string($_POST['allplayers'][$iattendee]['dkp']).", member_status = '1', member_lastraid = '".mysql_real_escape_string($iraid['time'])."', member_raidcount = member_raidcount + 1 WHERE member_name = '".mysql_real_escape_string($iattendee)."';");
						}
						else
						{
							//echo "<br>     DKP Value NOT Set.";
							//$sql = "UPDATE ".MEMBERS_TABLE." SET member_earned = member_earned + ".mysql_real_escape_string($iraid['dkp']).", member_status = '1', member_lastraid = '".mysql_real_escape_string($iraid['time'])."', member_raidcount = member_raidcount + 1 WHERE member_name = '".mysql_real_escape_string($iattendee)."';";
							if(!$this->_ctrt_settings['OnlySimulate']) $db->query("INSERT INTO ".RAID_ATTENDEES_TABLE." (`raid_id`, `member_name`, `wrs_earned`) VALUES ('".mysql_real_escape_string($newraidid)."', '".mysql_real_escape_string($iattendee)."', '".mysql_real_escape_string($iraid['dkp'])."');");
							if(!$this->_ctrt_settings['OnlySimulate']) $db->query("UPDATE ".MEMBERS_TABLE." SET member_earned = member_earned + ".mysql_real_escape_string($iraid['dkp']).", member_status = '1', member_lastraid = '".mysql_real_escape_string($iraid['time'])."', member_raidcount = member_raidcount + 1 WHERE member_name = '".mysql_real_escape_string($iattendee)."';");
						}
						//echo "<br>     Update SQL: " . $sql;
						
						// Handle any adjustment text we want to process.
						if (isset($_POST['allplayers'][$iattendee]['adjustment']) && $_POST['allplayers'][$iattendee]['adjustment'] != "")
						{	
							if(!$this->_ctrt_settings['OnlySimulate']) $db->query("INSERT INTO ".ADJUSTMENTS_TABLE." (`adjustment_value`, `adjustment_date`, `member_name`, `adjustment_reason`, `adjustment_added_by`, `adjustment_group_key`) VALUES ('0' , '".mysql_real_escape_string($iraid['time'])."' , '".mysql_real_escape_string($iattendee)."' , '".mysql_real_escape_string($_POST['allplayers'][$iattendee]['adjustment'])."' , 'WRS Upload' , '".$this->gen_group_key($iraid['time'], "Upload Adjustment", mysql_real_escape_string($_POST['allplayers'][$iattendee]['adjustment']))."');");
							$log_action = array(
	                        				'header'         => '{L_ACTION_INDIVADJ_ADDED}',
	                                        '{L_ADJUSTMENT}' => 5,
	                                        '{L_REASON}'     => $_POST['allplayers'][$iattendee]['adjustment'],
	                                        '{L_MEMBERS}'    => $iattendee,
	                                        '{L_ADDED_BY}'   => 'RaidTracker (by '.$user->data['username'].')',
									);
							if (!$this->_ctrt_settings['OnlySimulate']) $this->log_insert(array('log_type'   => $log_action['header'],'log_action' => $log_action));
							$text .= sprintf($user->lang['ctrt_step3_adjadded'], $_POST['allplayers'][$iattendee]['adjustment'], $iattendee);
						} 
					}
					$text .= sprintf($user->lang['ctrt_step3_attendeesadded'], count($iraid['attendees']));

					// START EQdkpPlus mod
					$sql = 'SHOW COLUMNS
                                    FROM '.ITEMS_TABLE."
                                    LIKE 'game_itemid'";
					$result = $db->query_first($sql);
					if (strcasecmp($result,'game_itemid') == 0) {
						$item_gameidExists = TRUE;
					}
					// END EQdkpPlus mod

					// Because some people do not uninstall / install the plugin when upgrading I have to ensure the ctrt_wowitemid column exists
					$sql = 'SHOW COLUMNS
                                    FROM '.ITEMS_TABLE."
                                    LIKE 'item_ctrt_wowitemid'";
					$result = $db->query_first($sql);
					if (strcasecmp($result,'item_ctrt_wowitemid') != 0) {
						$db->query("ALTER TABLE `".ITEMS_TABLE."`
						              ADD `item_ctrt_wowitemid` INT(10) UNSIGNED NULL;");
					}

					foreach($iraid['loots'] as $iloot) {
						if(!$ctrt_settings['OnlySimulate']) {

							$sql = "INSERT INTO ".ITEMS_TABLE."
                                        (`item_name`,
                                         `item_buyer`,
                                         `raid_id`,
                                         `item_value`,
                                         `item_date`,
                                         `item_added_by`,
                                         `item_group_key`,
                                         `item_ctrt_wowitemid`";
							// START EQdkpPlus mod
							if ($item_gameidExists) {
								$sql .= ",`game_itemid`";
							}
							// END EQdkpPlus mod
							$sql .= ") VALUES
                                     ('".mysql_real_escape_string($iloot['name'])."',
                                      '".mysql_real_escape_string($iloot['looter'])."',
                                      '".mysql_real_escape_string($newraidid)."',
                                      '".mysql_real_escape_string($iloot['dkp'])."',
                                      '".mysql_real_escape_string($iraid['time'])."',
                                      'RaidTracker (by ".mysql_real_escape_string($user->data['username']).")',
                                      '".mysql_real_escape_string($this->gen_group_key($iloot['name'], $iraid['time'], $newraidid))."',
                                      '".mysql_real_escape_string($iloot['id'])."'";
							// START EQdkpPlus mod
							if ($item_gameidExists) {
								$sql .= ",'".mysql_real_escape_string($iloot['id'])."'";
							}
							// END EQdkpPlus mod
							$sql .= ");";
							$db->query($sql);
						}

						if(!$this->_ctrt_settings['OnlySimulate']) {
							$db->query("UPDATE ".MEMBERS_TABLE."
                                           SET member_spent = member_spent + ".mysql_real_escape_string($iloot['dkp'])."
                                         WHERE member_name = '".mysql_real_escape_string($iloot['looter'])."';");
						}
						$text .= sprintf($user->lang['ctrt_step3_lootadded'], $iloot['name'], $iloot['dkp'], $iloot['looter']);
						$log_action = array(
                            'header'       => '{L_ACTION_ITEM_ADDED}',
                            '{L_NAME}'     => $iloot['name'],
                            '{L_BUYERS}'   => $iloot['looter'],
                            '{L_RAID_ID}'  => $newraidid,
                            '{L_VALUE}'    => $iloot['dkp'],
                            '{L_ADDED_BY}' => 'RaidTracker (by '.$user->data['username'].')',
						);
						if(!$this->_ctrt_settings['OnlySimulate']) $this->log_insert(array('log_type' => $log_action['header'],'log_action' => $log_action));
					}
					$text .= "<br>\n";
				}
			}
		}
		message_die($text, $user->lang['ctrt_step3_title']);

		$eqdkp->set_vars(array(
                'page_title'        => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['ctrt_step3_pagetitle'],
                'template_path'         => $pm->get_data('ctrt', 'template_path'),
                'template_file'     => 'ctrt.html',
                'display'           => true,
		));
	}

	function display_form()
	{
		global $db, $eqdkp, $user, $tpl, $pm;
		global $SID;

		$tpl->assign_vars(array(
            'F_PARSE_LOG'    => 'index.php' . $SID,
            'S_STEP1'        => true,
            'L_PASTE_LOG'    => $user->lang['ctrt_step1_th'],
            'L_PARSE_LOG'    => $user->lang['ctrt_step1_button_parselog'],
		)
		);

		$eqdkp->set_vars(array(
            'page_title'        => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['ctrt_step1_pagetitle'],
            'template_path'         => $pm->get_data('ctrt', 'template_path'),
            'template_file'     => 'ctrt.html',
            'display'           => true,
		)
		);
	}
}

function print_r_string($arr,$first=true,$tab=0)
{
	$output = "";
	$tabsign = ($tab) ? str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$tab) : '';
	if ($first) $output .= "<pre><br>\n";
	foreach($arr as $key => $val)
	{
		switch (gettype($val))
		{
			case "array":
				$output .= $tabsign."[".htmlspecialchars($key)."] = array(".count($val).")<br>\n".$tabsign."(<br>\n";
				$tab++;
				$output .= print_r_string($val,false,$tab);
				$tab--;
				$output .= $tabsign.")<br>\n";
				break;
			case "boolean":
				$output .= $tabsign."[".htmlspecialchars($key)."] bool = '".($val?"true":"false")."'<br>\n";
				break;
			case "integer":
				$output .= $tabsign."[".htmlspecialchars($key)."] int = '".htmlspecialchars($val)."'<br>\n";
				break;
			case "double":
				$output .= $tabsign."[".htmlspecialchars($key)."] double = '".htmlspecialchars($val)."'<br>\n";
				break;
			case "string":
				$output .= $tabsign."[".htmlspecialchars($key)."] string = '".((stristr($key,'passw')) ? str_repeat('*', strlen($val)) : htmlspecialchars($val))."'<br>\n";
				break;
			default:
				$output .= $tabsign."[".htmlspecialchars($key)."] unknown = '".htmlspecialchars(gettype($val))."'<br>\n";
				break;
		}
	}
	if ($first) $output .= "</pre><br>\n";
	return $output;
}

$CTRT_Import = new CTRT_Import;
$CTRT_Import->process();
?>