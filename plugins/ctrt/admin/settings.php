<?php
/**
 * Update CT_RaidTracker Import configuration settings
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 256 $ $Date: 2008-05-13 22:58:04 -0700 (Tue, 13 May 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

/**
 * CTRT_Settings manages the plugin configuration settings
 * @subpackage ManageCTRT
 */
class CTRT_Settings extends CTRT_ManageSettings
{
    function CTRT_Settings()
    {
        parent::eqdkp_admin();
        $this->loadGlobals();

        $this->assoc_buttons(array(
				    'submit' => array(
                'name'    => 'submit',
					      'process' => 'process_submit',
					      'check'   => 'a_members_man'),
				    'form' => array(
						    'name'    => '',
						    'process' => 'display_form',
						    'check'   => 'a_members_man'))
				);
    }

    function error_check()
    {
        global $user;

        $this->fv->is_number(array(
            'starting_dkp'      => $user->lang['fv_number'],
            'default_dkp'       => $user->lang['fv_number'],
            'start_raid_dkp'    => $user->lang['fv_number']
        ));

        return $this->fv->is_error();
    }

    /**
     * Process Submit
     */
    function process_submit()
    {
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

        $_POST = htmlspecialchars_array($_POST);

        // Update each config setting
        $this->config_set(array(
            'MinItemQuality'            => $_POST['min_item_quality'],
            'IgnoredLooter'             => ucwords($_POST['ignored_looter']),
            'AddLootDkpValuesCheckbox'  => ( $_POST['add_loot_dkp'] == "Y" ) ? "1" : "0",
            'ConvertNames'              => ( $_POST['convert_names'] == "Y" ) ? "1" : "0",
            'LootNoteEventTriggerCheck' => ( $_POST['event_trigger'] == "Y" ) ? "1" : "0",
            'NewMemberDefaultRank'      => $_POST['default_rank_id'],
            'AttendanceFilter'          => $_POST['attendance_filter'],
            'SkipRaidsWithEmptyNote'    => ( $_POST['skip_empty_note_raids'] == "Y" ) ? "1" : "0",
            'DefaultDKPCost'            => intval($_POST['default_dkp']),
            'StartingDKP'               => intval($_POST['starting_dkp']),
            'CreateStartRaid'           => ( $_POST['create_start_raid'] == "Y" ) ? "1" : "0",
            'StartRaidDKP'              => intval($_POST['start_raid_dkp']),
            'OnlySimulate'              => ( $_POST['simulate'] == "Y" ) ? "1" : "0"
        ));

        $log_action = array(
            'header'          				=> '{L_ACTION_CTRT_CONFIG_UPDATED}',
            '{L_UPDATED_BY}'   				=> $this->admin_user);

        $this->log_insert(array(
            'log_type'   => $log_action['header'],
            'log_action' => $log_action)
        );

        $tpl->assign_vars(array(
            // Form vars
            'L_UPDATE_SUCCESS' => $user->lang["ctrt_settings_update_success"]
			));

        $this->display_form();
    }

    /**
     * Display form
     */
    function display_form()
    {
        $this->createMenus();

        /**
         * Get any sets associated with this category
         */
        $sql = "SELECT config_name, config_value
                  FROM ".CTRT_CONFIG_TABLE;
        $results = $this->_db->query($sql);

        $ctrt_config = array();
        while ($config = $this->_db->fetch_record($results)) {
            $ctrt_config[$config['config_name']] = $config['config_value'];
        }
        $this->_db->free_result($results);

        /**
         * Create the Minimum Quality menu
         */
        $quality = array (
                CTRT_IQ_POOR        => $this->_user->lang['ctrt_iq_poor'],
                CTRT_IQ_COMMON      => $this->_user->lang['ctrt_iq_common'],
                CTRT_IQ_UNCOMMON    => $this->_user->lang['ctrt_iq_uncommon'],
                CTRT_IQ_RARE        => $this->_user->lang['ctrt_iq_rare'],
                CTRT_IQ_EPIC        => $this->_user->lang['ctrt_iq_epic'],
                CTRT_IQ_LEDGENDARY  => $this->_user->lang['ctrt_iq_ledgendary']
            );

        foreach ($quality as $key => $value) {
            $this->_tpl->assign_block_vars('quality_row', array(
                'VALUE' => $key,
                'SELECTED' => ( $key == $ctrt_config['MinItemQuality']) ? ' selected="selected"' : '',
                'OPTION'   => $value)
                );
        }

        /**
         * Create the Rank menu
         */
        $sql = "SELECT rank_id, rank_name
                  FROM ".MEMBER_RANKS_TABLE;
        $results = $this->_db->query($sql);

        while ($rank = $this->_db->fetch_record($results)) {
            $this->_tpl->assign_block_vars('rank_row', array(
                'VALUE' => $rank['rank_id'],
                'SELECTED' => ( $rank['rank_id'] == $ctrt_config['NewMemberDefaultRank']) ? ' selected="selected"' : '',
                'OPTION'   => $rank['rank_name'])
                );
        }
        $this->_db->free_result($results);

        /**
         * Create the Attenance Filter menu
         */
        $attendance = array (
                CTRT_AF_NONE        => $this->_user->lang['ctrt_af_none'],
                CTRT_AF_LOOT_TIME   => $this->_user->lang['ctrt_af_loot_time'],
                CTRT_AF_BOSS_KILL   => $this->_user->lang['ctrt_af_boss_kill']
            );
        foreach ($attendance as $key => $value) {
            $this->_tpl->assign_block_vars('attendance_row', array(
                'VALUE' => $key,
                'SELECTED' => ( $key == $ctrt_config['AttendanceFilter']) ? ' selected="selected"' : '',
                'OPTION'   => $value)
                );
        }

        $this->_tpl->assign_vars(array(
            // Form vars
            'F_CONFIG' => $this->getControllerLink("settings","config"),

            // Form values
            'IGNORED_LOOTER'        => $ctrt_config['IgnoredLooter'],
            'ADD_LOOT_DKP'          => ( $ctrt_config['AddLootDkpValuesCheckbox'] == "1") ? 'checked="checked"' : "",
            'CONVERT_NAMES'         => ( $ctrt_config['ConvertNames'] == "1") ? 'checked="checked"' : "",
            'EVENT_TRIGGER'         => ( $ctrt_config['LootNoteEventTriggerCheck'] == "1") ? 'checked="checked"' : "",
            'SKIP_EMPTY_NOTE_RAIDS' => ( $ctrt_config['SkipRaidsWithEmptyNote'] == "1") ? 'checked="checked"' : "",
            'DEFAULT_DKP'           => $ctrt_config['DefaultDKPCost'],
            'STARTING_DKP'          => $ctrt_config['StartingDKP'],
            'CREATE_START_RAID'     => ( $ctrt_config['CreateStartRaid'] == "1") ? 'checked="checked"' : "",
            'START_RAID_DKP'        => $ctrt_config['StartRaidDKP'],
            'SIMULATE'              => ( $ctrt_config['OnlySimulate'] == "1") ? 'checked="checked"' : "",

            // Language
            'L_SETTINGS'    	=> $this->_user->lang['ctrt_adminmenu_settings'],
            'L_ALIASES'     	=> $this->_user->lang['ctrt_aliases'],
			'L_PLUGIN_TITLE'	=> $this->_user->lang['ctrt'],

            'L_MIN_QUALITY'         => $this->_user->lang['ctrt_min_quality'],
            'L_ADD_LOOT_DKP'        => $this->_user->lang['ctrt_add_loot_dkp'],
            'L_IGNORED_LOOTER'      => $this->_user->lang['ctrt_ignored_looter'],
            'L_CONVERT_NAMES'       => $this->_user->lang['ctrt_convert_names'],
            'L_EVENT_TRIGGER'       => $this->_user->lang['ctrt_loot_note_event_trigger'],
            'L_DEFAULT_RANK'        => $this->_user->lang['ctrt_default_rank'],
            'L_ATTENDANCE_FILTER'   => $this->_user->lang['ctrt_attendance_filter'],
            'L_SKIP_RAIDS'          => $this->_user->lang['ctrt_skip_raids'],
            'L_DEFAULT_DKP'         => $this->_user->lang['ctrt_default_dkp'],
            'L_STARTING_DKP'        => $this->_user->lang['ctrt_starting_dkp'],
            'L_CREATE_START_RAID'   => $this->_user->lang['ctrt_create_start_raid'],
            'L_START_RAID_DKP'      => $this->_user->lang['ctrt_start_raid_dkp'],
            'L_SIMULATE'            => $this->_user->lang['ctrt_simulate'],

            'L_MIN_QUALITY_HELP'        => $this->_user->lang['ctrt_help_min_quality'],
            'L_ADD_LOOT_DKP_HELP'       => $this->_user->lang['ctrt_help_add_loot_dkp'],
            'L_IGNORED_LOOTER_HELP'     => $this->_user->lang['ctrt_help_ignored_looter'],
            'L_CONVERT_NAMES_HELP'      => $this->_user->lang['ctrt_help_convert_names'],
            'L_EVENT_TRIGGER_HELP'      => $this->_user->lang['ctrt_help_loot_note_event_trigger'],
            'L_DEFAULT_RANK_HELP'       => $this->_user->lang['ctrt_help_default_rank'],
            'L_ATTENDANCE_FILTER_HELP'  => $this->_user->lang['ctrt_help_attendance_filter'],
            'L_SKIP_RAIDS_HELP'         => $this->_user->lang['ctrt_help_skip_raids'],
            'L_DEFAULT_DKP_HELP'        => $this->_user->lang['ctrt_help_default_dkp'],
            'L_STARTING_DKP_HELP'       => $this->_user->lang['ctrt_help_starting_dkp'],
            'L_CREATE_START_RAID_HELP'  => $this->_user->lang['ctrt_help_create_start_raid'],
            'L_START_RAID_DKP_HELP'     => $this->_user->lang['ctrt_help_start_raid_dkp'],
            'L_SIMULATE_HELP'           => $this->_user->lang['ctrt_help_simulate'],

            'L_ADD_EVENT_TRIGGER'       => $this->_user->lang['ctrt_adminmenu_event_triggers'],
            'L_ADD_RAID_NOTE_TRIGGER'   => $this->_user->lang['ctrt_adminmenu_raid_note_triggers'],
            'L_ADD_CUSTOM_RAID'         => $this->_user->lang['ctrt_adminmenu_own_raid'],
            'L_ADD_IGNORED_ITEM'        => $this->_user->lang['ctrt_adminmenu_always_ignored'],
            'L_ADD_ADD_ITEM'            => $this->_user->lang['ctrt_adminmenu_always_added'],

            'L_RESET'           => $this->_user->lang['reset'],
            'L_UPDATE'          => $this->_user->lang['update'],

            // Form validation
            'FV_DEFAULT_DKP'        => $this->fv->generate_error('default_dkp'),
            'FV_STARTING_DKP'       => $this->fv->generate_error('starting_dkp'),
            'FV_START_RAID_DKP'     => $this->fv->generate_error('start_raid_dkp'),

        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $this->_eqdkp->config['guildtag'], $this->_eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/settings.html',
            'display'       => true)
        );
    }

    /**
     * config_set
     * @param $config_name mixed
     * @param $config_value
     */
    function config_set($config_name, $config_value='')
    {
        if ( is_object($this->_db) )
        {
            if ( is_array($config_name) )
            {
                foreach ( $config_name as $d_name => $d_value )
                {
                    $this->config_set($d_name, $d_value);
                }
            }
            else
            {
                $sql = 'UPDATE ' . CTRT_CONFIG_TABLE . "
                        SET config_value='".strip_tags(htmlspecialchars($config_value))."'
                        WHERE config_name='".$config_name."'";
                $this->_db->query($sql);

                return true;
            }
        }

        return false;
    }
}
?>
