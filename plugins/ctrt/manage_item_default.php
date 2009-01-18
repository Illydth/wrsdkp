<?php
/**
 * List, Add, update, or delete a CT_RaidTracker Default Item Value
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Douglas Wagner <douglasw at wagnerweb dot org>
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
include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/dao/defaultvalue.php');

$user->check_auth('u_member_list');

/**
 * Alias controller
 * @subpackage ManageCTRT
 */
class CTRT_ManageDefaultValue extends CTRT_ManageCTRT {

	var $_myParam = 'defaultvalue';
	
    function adddefaultvalue () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/defaultvalue/add.php');
        $extension = new CTRT_AddDefaultValue;
        $extension->process();
    }

    function listdefaultvalue () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/defaultvalue/list.php');
        $extension = new CTRT_ListDefaultValue;
        $extension->process();
    }

    function exportdefaultvalue () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/defaultvalue/export.php');
        $extension = new CTRT_ExportDefaultValue;
        $extension->process();
    }

    function importdfaultvalue () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/defaultvalue/import.php');
        $extension = new CTRT_ImportDefaultValue;
        $extension->process();
    }
}

$CTRT_ManageDefaultValue = new CTRT_ManageDefaultValue();
$CTRT_ManageDefaultValue->process();

?>