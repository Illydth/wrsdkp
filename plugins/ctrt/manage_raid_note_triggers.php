<?php
/**
 * CT_RaidTracker Raid Note Trigger Controller
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 163 $ $Date: 2008-02-17 18:50:36 -0800 (Sun, 17 Feb 2008) $
 */

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'ctrt');

$eqdkp_root_path = './../../';
include_once($eqdkp_root_path . 'common.php');

if ( !$pm->check(PLUGIN_INSTALLED, 'ctrt') )
{
    message_die('The CT_RaidTracker Import plugin is not installed.');
}

include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/config.php');
include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/manage_ctrt.php');
include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/dao/raidnotetrigger.php');

$user->check_auth('a_raid_add');

/**
 * CT_RaidTracker Raid Note Trigger Controller
 * @subpackage ManageCTRT
 */
class CTRT_ManageRaidNoteTriggers extends CTRT_ManageCTRT {

    var $_myParam = 'raid_note_triggers';
    var $daoRaidNoteTrigger;                    // Data accessor object for RaidNoteTriggers

    function addraid_note_triggers () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/raidnotetriggers/add.php');
        $extension = new CTRT_AddRaidNoteTrigger;
        $extension->process();
    }

    function listraid_note_triggers () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/raidnotetriggers/list.php');
        $extension = new CTRT_ListRaidNoteTriggers;
        $extension->process();
    }

    function exportraid_note_triggers () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/raidnotetriggers/export.php');
        $extension = new CTRT_ExportRaidNoteTriggers;
        $extension->process();
    }

    function importraid_note_triggers () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/raidnotetriggers/import.php');
        $extension = new CTRT_ImportRaidNoteTriggers;
        $extension->process();
    }
}

$CTRT_ManageRaidNoteTriggers = new CTRT_ManageRaidNoteTriggers;
$CTRT_ManageRaidNoteTriggers->process();

?>