<?php
/**
 * CT_RaidTracker Raid Add Items Controller
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 178 $ $Date: 2008-02-18 21:24:28 -0800 (Mon, 18 Feb 2008) $
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
include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/dao/items.php');

$user->check_auth('a_raid_add');

/**
 * CT_RaidTracker Add Item Controller
 * @subpackage ManageCTRT
 */
class CTRT_ManageAddItems extends CTRT_ManageCTRT {

    var $_myParam = 'add_items';
    var $daoAddItem;                    // Data accessor object for AddItems

    function CTRT_ManageAddItems()
    {
        parent::CTRT_ManageCTRT();
    }

    function addadd_items () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/additems/add.php');
        $extension = new CTRT_AddAddItem;
        $extension->process();
    }

    function listadd_items () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/additems/list.php');
        $extension = new CTRT_ListAddItems;
        $extension->process();
    }

    function exportadd_items () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/additems/export.php');
        $extension = new CTRT_ExportAddItems;
        $extension->process();
    }

    function importadd_items () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/additems/import.php');
        $extension = new CTRT_ImportAddItems;
        $extension->process();
    }
}

$CTRT_ManageAddItems = new CTRT_ManageAddItems;
$CTRT_ManageAddItems->process();

?>