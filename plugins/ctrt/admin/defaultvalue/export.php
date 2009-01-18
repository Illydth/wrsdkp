<?php
/**
 * Export CT_RaidTracker Add Items
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 171 $ $Date: 2008-02-18 21:17:43 -0800 (Mon, 18 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

/**
 * This class exports add items
 * @subpackage ManageCTRT
 */
class CTRT_ExportAddItems extends CTRT_ManageAddItems {

    function CTRT_ExportAddItems()
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

        $daoAddItem = new CTRT_Items();
        $addItems = $daoAddItem->getRecord(array('items_ctrt_type'=>CTRT_ADD_ITEM));

        $temp = array();
        foreach ( $addItems as $addItem)
        {
            $temp[] = $addItem["items_wowid"];
        }

        $exportXML = $parser->xml_export(array("AddItems"=>array("AddItem"=>$temp)));

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
