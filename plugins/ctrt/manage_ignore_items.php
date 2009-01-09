<?php
/**
 * CT_RaidTracker Raid Ignore Items Controller
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
class CTRT_ManageIgnoreItems extends CTRT_ManageCTRT {

    var $_myParam = 'ignore_items';
    var $daoIgnoreItem;                 // Data accessor object for IgnoreItems

    function CTRT_ManageIgnoreItems()
    {
        parent::CTRT_ManageCTRT();
    }

    function addignore_items () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ignoreitems/add.php');
        $extension = new CTRT_AddIgnoreItem;
        $extension->process();
    }

    function listignore_items () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ignoreitems/list.php');
        $extension = new CTRT_ListIgnoreItems;
        $extension->process();
    }

    function exportignore_items () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ignoreitems/export.php');
        $extension = new CTRT_ExportIgnoreItems;
        $extension->process();
    }

    function importignore_items () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ignoreitems/import.php');
        $extension = new CTRT_ImportIgnoreItems;
        $extension->process();
    }
}

$CTRT_ManageIgnoreItems = new CTRT_ManageIgnoreItems;
$CTRT_ManageIgnoreItems->process();

?>