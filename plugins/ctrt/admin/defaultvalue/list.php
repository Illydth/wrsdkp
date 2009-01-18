<?php
/**
 * List CT_RaidTracker Add Items
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
 * Display a list of items. Provides mass delete.
 * @subpackage ManageCTRT
 */
class CTRT_ListDefaultValue extends CTRT_ManageDefaultValue
{
    function CTRT_ListDefaultValue()
    {
        $this->setMyMode('list');
        $this->loadGlobals();
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
        $this->daoAddItem = new CTRT_DefaultValue;
        $addItems = $this->daoAddItem->getRecord(); //Maybe need to add a value here.
        foreach ($addItems as $row) {
            $this->_tpl->assign_block_vars('row', array(
                'ID'        => $row['dvalue_id'],
                'ROW_CLASS' => $this->_eqdkp->switch_row_class(),
                'COL1'      => $row['item_name'],
                'COL2'      => $row['item_default_value'],
                'U_ADD'     => 'http://www.wowhead.com/?item='.$row['items_wowid'])
            );
        }

        $this->_tpl->assign_vars(array(
            // Form vars
            'F_CONFIG' => $this->getControllerLink($this->getMyParam(),"add"),

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],
            'L_COL1'            => $this->_user->lang['name'],
            'L_COL2'            => $this->_user->lang['ctrt_item_value'],

            /**
             * Help text
             */
            'L_HELP'            => $this->_user->lang['ctrt_help_item_default_value'],
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
