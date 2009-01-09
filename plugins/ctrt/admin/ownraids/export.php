<?php
/**
 * Export CT_RaidTracker Own Raids
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 187 $ $Date: 2008-02-23 21:47:08 -0800 (Sat, 23 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

/**
 * This class exports event triggers
 * @subpackage ManageCTRT
 */
class CTRT_ExportOwnRaids extends CTRT_ManageOwnRaids {

    function CTRT_ExportOwnRaids()
    {
        $this->loadGlobals();
        $this->setMyMode('export');
        $this->assoc_buttons(array(
            'form' => array(
                'name'    => '',
                'process' => 'display_form',
                'check'   => 'a_raid_add'))
        );
    }

    /**
     * Display form
     */
    function display_form()
    {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ctrt_xml.php');
        $parser = new CTRT_XML();

        $daoOwnRaids = new CTRT_OwnRaids();
        $ownRaids = $daoOwnRaids->getAll();

        $temp = array();
        foreach ( $ownRaids as $ownRaid)
        {
            $temp[] = $ownRaid["own_raid_name"];
        }

        $exportXML = $parser->xml_export(array("OwnRaids"=>array("OwnRaid"=>$temp)));

        $this->createMenus();

        $this->_tpl->assign_vars(array(
            // Form values
            'EXPORT'            => htmlentities($exportXML),

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],

            /**
             * Help text
             */
            'L_HELP'            => $this->_user->lang['ctrt_help_export'],

        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $this->_eqdkp->config['guildtag'], $this->_eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/export.html',
            'display'       => true)
        );
    }
}
?>
