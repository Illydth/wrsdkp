<?php
/**
 * CT_RaidTracker Raid Own Raid Controller
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 187 $ $Date: 2008-02-23 21:47:08 -0800 (Sat, 23 Feb 2008) $
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
include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/dao/ownraids.php');

$user->check_auth('a_raid_add');

/**
 * Own Raid Controller
 * @subpackage ManageCTRT
 */
class CTRT_ManageOwnRaids extends CTRT_ManageCTRT {

    var $_myParam = 'own_raids';
    var $daoOwnRaids;                    // Data accessor object for OwnRaids

    function addown_raids () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ownraids/add.php');
        $extension = new CTRT_AddOwnRaids;
        $extension->process();
    }

    function listown_raids () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ownraids/list.php');
        $extension = new CTRT_ListOwnRaids;
        $extension->process();
    }

    function exportown_raids () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ownraids/export.php');
        $extension = new CTRT_ExportOwnRaids;
        $extension->process();
    }

    function importown_raids () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ownraids/import.php');
        $extension = new CTRT_ImportOwnRaids;
        $extension->process();
    }
}

$CTRT_ManageOwnRaids = new CTRT_ManageOwnRaids;
$CTRT_ManageOwnRaids->process();

?>