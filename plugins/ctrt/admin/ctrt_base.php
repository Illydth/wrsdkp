<?php
/**
 * Base object for CTRT_RaidTracker
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 163 $ $Date: 2008-02-17 18:50:36 -0800 (Sun, 17 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Haxor!!!');
}
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path.'plugins/ctrt/config.php');

/**
 * Base class for all CTRT classes
 * @subpackage CTRTAdmin
 */
class CTRT_Base extends EQdkp_Admin {

    /**
     * global eqdkp system vars
     */
    var $_db;
    var $_eqdkp;
    var $_tpl;
    var $_pm;
    var $_user;
    var $_SID;

    function CTRT_Base () {}

    /**
     * loads EQdkp global vars into the class for easy reference
     */
    function loadGlobals () {
        global $db, $eqdkp, $user, $tpl, $pm, $SID;

        $this->_db    = &$db;
        $this->_eqdkp = &$eqdkp;
        $this->_user  = &$user;
        $this->_tpl   = &$tpl;
        $this->_pm    = &$pm;
        $this->_SID   = &$SID;
    }

    /**
     * Cleans and capitalizes a word
     */
    function getProperName($word) {
        // Make sure the name is properly capitalized
        return ucwords(trim($word));
    }
}
?>