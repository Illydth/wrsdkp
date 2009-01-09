<?php
/**
 * Add / Update CT_RaidTracker Ignore Items
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
 * This class handles ignore items add & update
 * @subpackage ManageCTRT
 */
class CTRT_AddIgnoreItem extends CTRT_ManageIgnoreItems
{
    var $data = array();           // Holds own_raid data if URI_ID is set         @var data

    function CTRT_AddIgnoreItem()
    {
        parent::eqdkp_admin();

        $this->loadGlobals();
        $this->setMyMode('add');
        $this->daoIgnoreItem = new CTRT_Items;

        // Vars used to confirm deletion
        $confirm_text = $this->_user->lang['ctrt_item_confirm_delete'];
        $items_ids = array();
        $items_names = array();
        if ( isset($_POST['delete']) )
        {
            if ( isset($_POST['compare_ids']) )
            {
                foreach ( $_POST['compare_ids'] as $keyID )
                {
                    $item = $this->daoIgnoreItem->getByPrimaryKey($keyID);
                    $items_ids[] = $item[0]['items_id'];
                    $items_names[] = $item[0]['items_name'];
                }

                $names = implode(', ', $items_names);
                $ids = implode(', ', $items_ids);

                $confirm_text .= '<br />' . $names;
            }
            else
            {
                $failure_message = sprintf($this->_user->lang["ctrt_item_not_selected"]);
                $link_list = array(
                    $this->_user->lang['ctrt_adminmenu_list']  => $this->getControllerLink($this->getMyParam(),'list'),
                    $this->_user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),'add'),
                    $this->_user->lang['ctrt_adminmenu_export']  => $this->getControllerLink($this->getMyParam(),'export'),
                    $this->_user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),'import'));

                $this->admin_die($failure_message, $link_list);
            }
        }

        $this->set_vars(array(
            'confirm_text'  => $confirm_text,
            'uri_parameter' => URI_ID,
            'url_id'        => ( sizeof($items_ids) > 0 ) ? $ids : (( isset($_GET[URI_ID]) ) ? $_GET[URI_ID] : ''),
            'script_name'   => $this->getControllerLink($this->getMyParam(),$this->getMyMode()))
        );

        $this->assoc_buttons(array(
            'add' => array(
                'name'    => 'add',
                'process' => 'process_add',
                'check'   => 'a_raid_add'),
            'delete' => array(
                'name'    => 'delete',
                'process' => 'process_delete',
                'check'   => 'a_raid_add'),
            'form' => array(
                'name'    => '',
                'process' => 'display_form',
                'check'   => 'a_members_man'))
        );
    }

    function error_check()
    {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ctrt_common.php');

        if ( (isset($_POST['add'])) ) {
            // required field
            $this->fv->is_filled('item', $this->_user->lang['fv_required_name']);

            if (!isset($this->fv->errors['item'])) {
                // must be a valid item (hopefully wowhead is current)
                $ignore_item = getWoWHeadItem ($_POST['item']);

                if (isset($ignore_item['error'])) {
                    $this->fv->errors['item'] = sprintf($this->_user->lang['ctrt_item_not_found'], $_POST['item']);
                } else {
                    // cannot already exist in DB
                    if ($this->daoIgnoreItem->isDuplicate(array('items_wowid' => $ignore_item['wowid']))) {
                        $this->fv->errors['item'] = sprintf($this->_user->lang['ctrt_item_duplicate'], $_POST['item']);
                    }
                }
            }
        }

        return $this->fv->is_error();
    }

    /**
     * Process Delete (confirmed)
     */
    function process_confirm()
    {
        $success_message = "";
        $ids = explode(", ", $this->url_id);

        foreach ($ids as $id) {
            // Save the record that will be deleted for later logging
            $old_data = $this->daoIgnoreItem->getByPrimaryKey($id);

            // Remove the record
            $this->daoIgnoreItem->deleteById($id);

            // Append success message
            $success_message .= sprintf($this->_user->lang["ctrt_item_success_delete"],$old_data[0]['items_name']) . '<br />';
        }

        $link_list = array(
                $this->_user->lang['ctrt_adminmenu_list']  => $this->getControllerLink($this->getMyParam(),'list'),
                $this->_user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),'add'),
                $this->_user->lang['ctrt_adminmenu_export']  => $this->getControllerLink($this->getMyParam(),'export'),
                $this->_user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),'import'));

        //
        // Success message
        //
        $this->admin_die($success_message, $link_list);

    }

    /**
     * Add an own raid record
     */
    function process_add()
    {
        include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ctrt_common.php');

        $ignore_item = getWoWHeadItem ($_POST['item']);

        if (!$this->daoIgnoreItem->insert(array('items_wowid' => $ignore_item['wowid'],
                                                'items_name' => $ignore_item['name'],
                                                'items_quality' => $ignore_item['quality']
                                                  ))) {
            // Error out if the item is a duplicate
            $failure_message = sprintf($this->_user->lang["ctrt_item_duplicate"],$ignore_item['name']);
            $link_list = array(
                $this->_user->lang['ctrt_adminmenu_list']  => $this->getControllerLink($this->getMyParam(),'list'),
                $this->_user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),'add'),
                $this->_user->lang['ctrt_adminmenu_export']  => $this->getControllerLink($this->getMyParam(),'export'),
                $this->_user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),'import'));

            $this->admin_die($failure_message, $link_list);
        } else {

            /**
             * Logging
             */

            /**
             * Get the member name for this alias
             */
            $log_action = array(
                'header'                      => '{L_ACTION_CTRT_IGNORE_ITEM_ADDED}',
                '{L_CTRT_LABEL_IGNORE_ITEM}'  => $ignore_item['name'],

                '{L_ADDED_BY}'                => $this->admin_user);

            $this->log_insert(array(
                'log_type'   => $log_action['header'],
                'log_action' => $log_action)
            );

            /**
             * Success message
             */
            $success_message = sprintf($this->_user->lang['ctrt_item_success_add'], $ignore_item['name']);
            $link_list = array(
                $this->_user->lang['ctrt_adminmenu_list']   => $this->getControllerLink($this->getMyParam(),'list'),
                $this->_user->lang['ctrt_adminmenu_add']    => $this->getControllerLink($this->getMyParam(),'add'),
                $this->_user->lang['ctrt_adminmenu_export'] => $this->getControllerLink($this->getMyParam(),'export'),
                $this->_user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),'import'));
            $this->admin_die($success_message, $link_list);
        }

        return;
    }

    /**
     * Display form
     */
    function display_form()
    {
        $this->createMenus();

        $this->_tpl->assign_vars(array(
            // Form vars
            'F_CONFIG' => $this->getControllerLink($this->getMyParam(),$this->getMyMode()),

            // Form values
            'ITEM'              => $this->data['item'],

            // Labels
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],
            'L_ITEM_WOW'     => $this->_user->lang['ctrt_item_wow'],

            // Buttons
            'L_ADD'     => $this->_user->lang['add'],

            /**
             * Help text
             */
            'L_HELP'     => $this->_user->lang['ctrt_help_ignore_items'],
            'L_HELP_WOW' => $this->_user->lang['ctrt_help_ignore_items_wow'],

            // Form validation
            'FV_NAME'        => $this->fv->generate_error('item'),
        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/additem.html',
            'display'       => true)
        );
    }
}
?>
