<?php
/**
 * Constants and runtime parameters for event triggers, raid note triggers, custom raids,
 * player aliases, ignored items, and always added items
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author freddy <CTRaidTrackerImport@freddy.eu.org>
 * $Rev: 274 $ $Date: 2008-09-14 16:19:07 -0700 (Sun, 14 Sep 2008) $
 */

/**
 * Tables used by CTRT Import
 */
global $table_prefix;
if (!defined('CTRT_CONFIG_TABLE'))              { define('CTRT_CONFIG_TABLE', ($table_prefix . 'ctrt_config')); }
if (!defined('CTRT_ALIASES_TABLE'))             { define('CTRT_ALIASES_TABLE', ($table_prefix . 'ctrt_aliases')); }
if (!defined('CTRT_EVENT_TRIGGERS_TABLE'))      { define('CTRT_EVENT_TRIGGERS_TABLE', ($table_prefix . 'ctrt_event_triggers')); }
if (!defined('CTRT_RAID_NOTE_TRIGGERS_TABLE'))  { define('CTRT_RAID_NOTE_TRIGGERS_TABLE', ($table_prefix . 'ctrt_raid_note_triggers')); }
if (!defined('CTRT_OWN_RAIDS_TABLE'))           { define('CTRT_OWN_RAIDS_TABLE', ($table_prefix . 'ctrt_own_raids')); }
if (!defined('CTRT_ITEMS_TABLE'))               { define('CTRT_ITEMS_TABLE', ($table_prefix . 'ctrt_items')); }
if (!defined('CTRT_DEFAULTVALUE_TABLE'))        { define('CTRT_DEFAULTVALUE_TABLE', ($table_prefix . 'ctrt_item_default_value')); }

// legacy defines from when I combined these tables into ctrt_items
if (!defined('CTRT_ADD_ITEMS_TABLE'))    { define('CTRT_ADD_ITEMS_TABLE', ($table_prefix . 'ctrt_add_items')); }
if (!defined('CTRT_IGNORE_ITEMS_TABLE')) { define('CTRT_IGNORE_ITEMS_TABLE', ($table_prefix . 'ctrt_ignore_items')); }

/**
 * Table identifiers
 */
define('CTRT_IGNORE_ITEM',  0);
define('CTRT_ADD_ITEM',     1);

/**
 * URI Parameters
 */
define('URI_ID',    'id');

/**
 * Item Quality
 */
define('CTRT_IQ_POOR',          0);
define('CTRT_IQ_COMMON',        1);
define('CTRT_IQ_UNCOMMON',      2);
define('CTRT_IQ_RARE',          3);
define('CTRT_IQ_EPIC',          4);
define('CTRT_IQ_LEGENDARY',     5);

/**
 * Attendance Filter
 */
define('CTRT_AF_NONE',      0);         // 0 = None ( if a person was in the raid they are added to all events )
define('CTRT_AF_LOOT_TIME', 1);         // 1 = Loot Time ( if a person was in the raid when the loot attached to an event was picked up they are added to the event )
define('CTRT_AF_BOSS_KILL', 2);         // 2 = Boss Kill Time ( if a person was in the raid when a boss attached to an event was killed they are addedto the event )

/**
 * Race Names
 */
define ('RACE_NAME_BLOOD_ELF',  'BloodElf');
define ('RACE_NAME_DRAENEI',    'Draenei');
define ('RACE_NAME_DWARF',      'Dwarf');
define ('RACE_NAME_GNOME',      'Gnome');
define ('RACE_NAME_HUMAN',      'Human');
define ('RACE_NAME_NIGHT_ELF',  'NightElf');
define ('RACE_NAME_UNDEAD',     'Undead');
define ('RACE_NAME_SCOURGE',    'Scourge');
define ('RACE_NAME_TAUREN',     'Tauren');
define ('RACE_NAME_TROLL',      'Troll');
define ('RACE_NAME_ORC',        'Orc');

/**
 * Class Names
 */
define ('CLASS_NAME_WARRIOR',    'Warrior');
define ('CLASS_NAME_ROGUE',      'Rogue');
define ('CLASS_NAME_HUNTER',     'Hunter');
define ('CLASS_NAME_PALADIN',    'Paladin');
define ('CLASS_NAME_PRIEST',     'Priest');
define ('CLASS_NAME_DRUID',      'Druid');
define ('CLASS_NAME_SHAMAN',     'Shaman');
define ('CLASS_NAME_WARLOCK',    'Warlock');
define ('CLASS_NAME_MAGE',       'Mage');
define ('CLASS_NAME_DEATHKNIGHT','Death Knight');

?>