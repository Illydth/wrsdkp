<?php
/**
 * Import CT_RaidTracker Ignore Items
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 193 $ $Date: 2008-02-25 09:55:32 -0800 (Mon, 25 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path.'plugins/ctrt/admin/ctrt_xml.php');

/**
 * This class imports ignore items
 * @subpackage ManageCTRT
 */
class CTRT_ImportIgnoreItems extends CTRT_ManageIgnoreItems {

    var $_sampleXML = "
&lt;IgnoreItems&gt;<br />
&nbsp;&nbsp;&lt;IgnoreItem&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"positive\">Shadowsong Amethyst</span><br />
&nbsp;&nbsp;&lt;/IgnoreItem&gt;<br />
&nbsp;&nbsp;&lt;IgnoreItem&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"positive\">20725</span><br />
&nbsp;&nbsp;&lt;/IgnoreItem&gt;<br />
&lt;/IgnoreItems&gt;";

    function CTRT_ImportIgnoreItems()
    {
        parent::eqdkp_admin();

        $this->loadGlobals();
        $this->setMyMode('import');
        $this->daoIgnoreItem = new CTRT_Items();
        $this->parser = new CTRT_XML();

        $this->assoc_buttons(array(
            'import' => array(
                'name'    => 'import',
                'process' => 'process_import',
                'check'   => 'a_raid_add'),
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
        $this->createMenus();

        $this->_tpl->assign_vars(array(
            // Form vars
            'XML'               => $_POST['xml'],
            'SAMPLE_XML'        => $this->_sampleXML,

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],

            // Buttons
            'L_IMPORT'          => $this->_user->lang['ctrt_import'],

            // Help text
            'L_HELP'            => $this->_user->lang['ctrt_help_import'],
            'L_HELP_FORMAT'     => $this->_user->lang["ctrt_help_import_format"],

            // Form validation
            'FV_INVALID_XML'    => $this->fv->generate_error('xmlError'),

        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $this->_eqdkp->config['guildtag'], $this->_eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/import.html',
            'display'       => true)
        );
    }

    /**
     * Validate the xml string
     */
    function error_check()
    {
        $xml = $this->parser->validateXML(stripslashes($_POST['xml']));
        if (!$xml) {
            $this->fv->is_filled('xmlError', $this->_user->lang['ctrt_fv_invalid_xml']);
        }
        return $this->fv->is_error();
    }

    /**
     * Import the aliases
     */
    function process_import () {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ctrt_common.php');
        $message = "";

        $items = $this->parser->xml_import(stripslashes($_POST['xml']));

        foreach ($items["IGNOREITEMS"] as $ignoreitems) {

            if (!is_array($ignoreitems)) {
                $ignoreitems = array($ignoreitems);
            }
            foreach ($ignoreitems as $item) {

                // Validate each item
                $item = getWoWHeadItem (trim($item));
                if (!isset($item['error'])) {
                    if (!$this->daoIgnoreItem->insert(array('items_wowid' => $item['wowid'],
                                                            'items_name' => $item['name'],
                                                            'items_quality' => $item['quality'],
                                                            'items_ctrt_type' => CTRT_IGNORE_ITEM
                                                              ))) {
                        // This item exists
                        $message .= sprintf($this->_user->lang["ctrt_item_duplicate"]."<br />",$item['name']);

                    } else {
                    /* @TODO
                       IMPORT SUCCESS - LOG RECORD HERE */
                        $message .= sprintf($this->_user->lang["ctrt_item_success_add"]."<br />",$item['name']);
                    }

                } else {
                    // Invalid item
                    $message .= sprintf($this->_user->lang['ctrt_item_not_found']."<br />", $item['name']);
                }
            }
        }

        $link_list = array(
                $this->_user->lang['ctrt_adminmenu_list']  => $this->getControllerLink($this->getMyParam(),'list'),
                $this->_user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),'add'),
                $this->_user->lang['ctrt_adminmenu_export']  => $this->getControllerLink($this->getMyParam(),'export'),
                $this->_user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),'import'));

        //
        // Success message
        //
        $this->admin_die($message, $link_list);
    }
}
?>
