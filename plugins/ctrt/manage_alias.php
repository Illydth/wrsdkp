<?php
/**
 * List, Add, update, or delete a CT_RaidTracker aliases
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
include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/dao/playeralias.php');

$user->check_auth('u_member_list');

/**
 * Alias controller
 * @subpackage ManageCTRT
 */
class CTRT_ManageAlias extends CTRT_ManageCTRT {

	var $_myParam = 'aliases';
	
    function addaliases () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/aliases/add.php');
        $extension = new CTRT_AddAlias;
        $extension->process();
    }

    function listaliases () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/aliases/list.php');
        $extension = new CTRT_ListAliases;
        $extension->process();
    }

    function exportaliases () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/aliases/export.php');
        $extension = new CTRT_ExportAliases;
        $extension->process();
    }

    function importaliases () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/aliases/import.php');
        $extension = new CTRT_ImportAliases;
        $extension->process();
    }
}

$CTRT_ManageAlias = new CTRT_ManageAlias();
$CTRT_ManageAlias->process();

?>