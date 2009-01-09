<?php
/**
 * List, Add, update, or delete a CT_RaidTracker event trigger
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
include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/dao/eventtrigger.php');

$user->check_auth('a_raid_add');

/**
 * Handle CT_RaidTracker event trigger admin events
 * @subpackage ManageCTRT
 */
class CTRT_ManageEventTriggers extends CTRT_ManageCTRT {

    var $_myParam = 'event_triggers';
    var $daoEventTrigger;                   // Data accessor object for EventTriggers

    function addevent_triggers () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/eventtriggers/add.php');
        $extension = new CTRT_AddEventTrigger;
        $extension->process();
    }

    function listevent_triggers () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/eventtriggers/list.php');
        $extension = new CTRT_ListEventTriggers;
        $extension->process();
    }

    function exportevent_triggers () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/eventtriggers/export.php');
        $extension = new CTRT_ExportEventTriggers;
        $extension->process();
    }

    function importevent_triggers () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/eventtriggers/import.php');
        $extension = new CTRT_ImportEventTriggers;
        $extension->process();
    }
}

$CTRT_ManageEventTriggers = new CTRT_ManageEventTriggers;
$CTRT_ManageEventTriggers->process();

?>