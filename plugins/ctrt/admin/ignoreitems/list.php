<?php
/**
 * List CT_RaidTracker Ignore Items
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
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path.'plugins/ctrt/admin/ctrt_xml.php');
/**
 * Display a list of items. Provides mass delete.
 * @subpackage ManageCTRT
 */
class CTRT_ListIgnoreItems extends CTRT_ManageIgnoreItems
{
    function CTRT_ListIgnoreItems()
    {
        $this->loadGlobals();
        $this->setMyMode('list');

        $this->parser = new CTRT_XML();

        $this->assoc_buttons(array(
            'delete' => array(
                'name'    => 'delete',
                'process' => 'process_delete',
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

        /**
         * Generate the list of own raids
         */
        $this->daoIgnoreItem = new CTRT_Items;
        $ignoreItems = $this->daoIgnoreItem->getRecord(array('items_ctrt_type'=>CTRT_IGNORE_ITEM));
        foreach ($ignoreItems as $row) {
            $this->_tpl->assign_block_vars('row', array(
                'ID'        => $row['items_id'],
                'ROW_CLASS' => $this->_eqdkp->switch_row_class(),
                'COL1'      => $row['items_name'],
                'COL2'      => $row['items_wowid'],
                'QUALITY'   => $row['items_quality'],
                'U_ADD'     => 'http://www.wowhead.com/?item='.$row['items_wowid'])
            );
        }

        $this->_tpl->assign_vars(array(
            // Form vars
            'F_CONFIG' => $this->getControllerLink($this->getMyParam(),"add"),

            // Labels
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],
            'L_COL1'            => $this->_user->lang['name'],
            'L_COL2'            => $this->_user->lang['ctrt_item_wow_id'],

            // Help text
            'L_HELP'            => $this->_user->lang['ctrt_help_ignore_items'],
            'L_DELETE'          => $this->_user->lang['delete'],

            // Template controls
            'S_ITEMS'           => true

        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/list.html',
            'display'       => true)
        );
    }
}
?>
