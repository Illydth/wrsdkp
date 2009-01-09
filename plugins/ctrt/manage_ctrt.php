<?php
/**
 * Main controller for the CT_RaidTracker plugin
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 255 $ $Date: 2008-05-13 21:38:21 -0700 (Tue, 13 May 2008) $
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
include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/ctrt_base.php');

/**
 * Handle CT_RaidTracker Import admin events
 * @subpackage ManageCTRT
 */
class CTRT_ManageCTRT extends CTRT_Base {

    /**
     * class specific vars
     */
    var $_ctrt_controllers = array("settings"           => "manage_settings.php",
                                   "event_triggers"     => "manage_event_triggers.php",
                                   "raid_note_triggers" => "manage_raid_note_triggers.php",
                                   "own_raids"          => "manage_own_raids.php",
                                   "add_items"          => "manage_add_items.php",
                                   "ignore_items"       => "manage_ignore_items.php",
                                   "aliases"            => "manage_alias.php",
                                   );

    /**
     * List of available modes
     */
    var $_myModes = array("list", "add", "export", "import");

    var $_myMode;
    var $_myParam;
    var $_controller;

    function CTRT_ManageCTRT()
    {
				$this->loadGlobals ();
        $this->assoc_buttons(array(
            'form' => array(
                'name'    => '',
                'process' => 'list'.$this->getMyParam(),
                'check'   => 'a_raid_add'))
        );

        foreach ($this->getMyModes() as $mode) {
            $this->assoc_params(array(
                $mode => array(
                    'name'    => 'mode',
                    'value'   => $mode,
                    'process' => $mode.$this->getMyParam(),
                    'check'   => 'a_raid_add')
            ));
        }
    }

    function getControllerLink ($param, $mode="list") {
        return ($this->_ctrt_controllers[$param] . $this->_SID . "&amp;mode=".$mode);
    }

    /**
     * Returns main menu links
     */
    function getMainMenu () {
        $mainMenuLinks = array();
        foreach ($this->getAllControllers() as $param => $controller) {

            $mainMenuLinks[] = array ("param" => $param,
                                      "text" => $this->_user->lang['ctrt_adminmenu_'.$param],
                                      "link" => ($this->getControllerLink($param))
                                 );
        }
        return $mainMenuLinks;
    }

    /**
     * Returns formatted submenu links
     * @var string $active currently selected  main menu link
     */
    function getFormattedMainMenu ($active) {
        $formattedMainMenu = array();
        foreach ($this->getMainMenu() as $mainMenuItem) {

            if (!strcmp($mainMenuItem["param"],$active)) {
                $mainMenu["CLASS"] = "class=\"row1\"";
                $mainMenu["MENU"] = "<strong>".$mainMenuItem["text"]."</strong>";
            } else {
                $mainMenu["CLASS"] = "";
                $mainMenu["MENU"] = "<a href=\"".$mainMenuItem["link"]."\">".$mainMenuItem["text"]."</a>";
            }
            $formattedMainMenu[] = $mainMenu;
        }

        return $formattedMainMenu;
    }

    /**
     * Returns submenu links
     */
    function getSubmenu () {
        $submenuLinks = array();
        foreach ($this->getMyModes() as $mode) {

            $submenuLinks[] = array ("param" => $this->getMyParam()."_".$mode,
                                     "text" => $this->_user->lang['ctrt_adminmenu_'.$mode],
                                     "link" => ($this->getControllerLink($this->getMyParam(),$mode))
                                    );
        }
        return $submenuLinks;
    }

    /**
     * Returns formatted submenu links
     * @var string $active currently selected submenu link
     */
    function getFormattedSubmenu ($active) {

        $formattedSubmenu = array();
        foreach ($this->getSubmenu() as $submenuItem) {

            if (!strcmp($submenuItem["param"],$active)) {
                $submenu["CLASS"] = "class=\"row1\"";
                $submenu["MENU"] = "<strong>".$submenuItem["text"]."</strong>";
            } else {
                $submenu["CLASS"] = "";
                $submenu["MENU"] = "<a href=\"".$submenuItem["link"]."\">".$submenuItem["text"]."</a>";
            }
            $formattedSubmenu[] = $submenu;
        }
        return $formattedSubmenu;
    }

    /**
     * Create the main & sub menus
     */
    function createMenus() {
        foreach ($this->getFormattedMainMenu($this->getMyParam()) as $mainMenu) {
            $this->_tpl->assign_block_vars('mainmenu_row',$mainMenu);
        }
        foreach ($this->getFormattedSubmenu($this->getMyParam()."_".$this->getMyMode()) as $exportMenu) {
            $this->_tpl->assign_block_vars('submenu_row',$exportMenu);
        }

    }

    /************************************
     * Getter / Setter methods
     *///////////////////////////////////

    /**
     * @var string $_myParam
     */
    function getMyParam() { return $this->_myParam; }
    function setMyParam($param) { $this->_myParam = $param; }

    /**
     * @var string $_myMode
     */
    function getMyMode() { return $this->_myMode; }
    function setMyMode($mode) { $this->_myMode = $mode; }

    /**
     * @var array $_myModes
     */
    function getMyModes() { return $this->_myModes; }
    function setMyModes($modes) { $this->_myModes = $modes; }

    /**
     * @var array $_ctrt_controllers
     */
    function getAllControllers() { return $this->_ctrt_controllers; }
}
?>