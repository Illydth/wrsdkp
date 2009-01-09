<?php
/**
 * Update CT_RaidTracker configuration settings
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

$user->check_auth('u_member_list');

/**
 * Handle CT_RaidTracker Import admin events
 * @subpackage ManageCTRT
 */
class CTRT_ManageSettings extends CTRT_ManageCTRT {

	var $_myParam = 'settings';

    function listsettings () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/settings.php');
        $extension = new CTRT_Settings;
        $extension->process();
    }
}

$CTRT_ManageSettings = new CTRT_ManageSettings();
$CTRT_ManageSettings->process();

?>