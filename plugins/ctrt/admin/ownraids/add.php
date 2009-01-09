<?php
/**
 * Add / Update CT_RaidTracker Own Raids
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
 * This class handles own raid add & update
 * @subpackage ManageCTRT
 */
class CTRT_AddOwnRaids extends CTRT_ManageOwnRaids
{
    var $data = array();           // Holds own_raid data if URI_ID is set         @var alias

    function CTRT_AddOwnRaids()
    {
        parent::eqdkp_admin();

        $this->loadGlobals();
        $this->setMyMode('add');
        $this->daoOwnRaids = new CTRT_OwnRaids;

        $this->data = array(
            'own_raid_id'       => 0,
            'own_raid_name'     => post_or_db('own_raid_name')
            );

        // Vars used to confirm deletion
        $confirm_text = $this->_user->lang['ctrt_own_raid_confirm_delete'];
        $own_raid_ids = array();
        if ( isset($_POST['delete']) )
        {
            if ( isset($_POST['compare_ids']) )
            {
                foreach ( $_POST['compare_ids'] as $keyID )
                {
                    $own_raid = $this->daoOwnRaids->getByPrimaryKey($keyID);
                    $own_raid_ids[] = $own_raid[0]['own_raid_id'];
                    $own_raid_names[] = $own_raid[0]['own_raid_name'];
                }

                $names = implode(', ', $own_raid_names);
                $ids = implode(', ', $own_raid_ids);

                $confirm_text .= '<br />' . $names;
            }
            else
            {
                $failure_message = sprintf($this->_user->lang["ctrt_own_raid_not_selected"]);
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
            'url_id'        => ( sizeof($own_raid_ids) > 0 ) ? $ids : (( isset($_GET[URI_ID]) ) ? $_GET[URI_ID] : ''),
            'script_name'   => $this->getControllerLink($this->getMyParam(),$this->getMyMode()))
        );

        $this->assoc_buttons(array(
            'add' => array(
                'name'    => 'add',
                'process' => 'process_add',
                'check'   => 'a_raid_add'),
            'update' => array(
                'name'    => 'update',
                'process' => 'process_update',
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

        // Build the alias array
        // ---------------------------------------------------------
        if ( !empty($this->url_id) )
        {
            $row = $this->daoOwnRaids->getById($this->url_id);
            $this->data = array(
                'own_raid_id'     => $row[0]['own_raid_id'],
                'own_raid_name'   => post_or_db('own_raid_name', $row[0]),
            );
        }
    }

    function error_check()
    {
        if ( (isset($_POST['add'])) || (isset($_POST['update'])) ) {
            $this->fv->is_filled('own_raid_name', $this->_user->lang['fv_required_name']);
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
            $old_data = $this->daoOwnRaids->getById($id);

            // Remove the record
            $this->daoOwnRaids->deleteById($id);

            // Append success message
            $success_message .= sprintf($this->_user->lang["ctrt_own_raid_success_delete"],$old_data['own_raid_name']) . '<br />';
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
     * Update an own raid record
     */
    function process_update()
    {
        // Make a copy of the data prior to updating
        $old_data = $this->daoOwnRaids->getById($this->url_id);

        if(!$this->daoOwnRaids->update($this->data)) {
            // Error out if own raid exists

            $failure_message = sprintf($this->_user->lang["ctrt_own_raid_duplicate"],$_POST['own_raid_name']);
            $link_list = array(
                $this->_user->lang['ctrt_adminmenu_list']  => $this->getControllerLink($this->getMyParam(),'list'),
                $this->_user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),'add'),
                $this->_user->lang['ctrt_adminmenu_export']  => $this->getControllerLink($this->getMyParam(),'export'),
                $this->_user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),'import'));

            $this->admin_die($failure_message, $link_list);
        } else {
            //
            // Success message
            //
            $success_message = sprintf($this->_user->lang['ctrt_own_raid_success_update'], $old_data['own_raid_name']);
            $link_list = array(
                $this->_user->lang['ctrt_adminmenu_list']  => $this->getControllerLink($this->getMyParam(),'list'),
                $this->_user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),'add'),
                $this->_user->lang['ctrt_adminmenu_export']  => $this->getControllerLink($this->getMyParam(),'export'),
                $this->_user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),'import'));
            $this->admin_die($success_message, $link_list);
        }
    }

    /**
     * Add an own raid record
     */
    function process_add()
    {
        $name = $_POST['own_raid_name'];

        if (!$this->daoOwnRaids->insert(array('own_raid_name' => $name
                                                  ))) {
            // Error out if the own raid exists
            $failure_message = sprintf($this->_user->lang["ctrt_own_raid_duplicate"],$name);
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
                'header'                        => '{L_ACTION_CTRT_own_raid_ADDED}',
                '{L_CTRT_LABEL_own_raid_NAME}'  => $name,

                '{L_ADDED_BY}'                  => $this->admin_user);

            $this->log_insert(array(
                'log_type'   => $log_action['header'],
                'log_action' => $log_action)
            );

            /**
             * Success message
             */
            $success_message = sprintf($this->_user->lang['ctrt_own_raid_success_add'], $name, $result);
            $link_list = array(
                $this->_user->lang['ctrt_adminmenu_list']  => $this->getControllerLink($this->getMyParam(),'list'),
                $this->_user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),'add'),
                $this->_user->lang['ctrt_adminmenu_export']  => $this->getControllerLink($this->getMyParam(),'export'),
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
            'V_ID'          => ( isset($_POST['add']) ) ? '' : $this->data['own_raid_id'],
            'ID'            => $this->data['own_raid_id'],
            'NAME'          => $this->data['own_raid_name'],

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],
            'L_OWN_RAID'        => $this->_user->lang['ctrt_own_raid'],

            // Buttons
            'S_ADD'     => ( !empty($this->url_id) ) ? false : true,
            'L_ADD'     => $this->_user->lang['add'],
            'L_UPDATE'  => $this->_user->lang['update'],
            'L_RESET'  => $this->_user->lang['reset'],

            /**
             * Help text
             */
            'L_HELP'        => $this->_user->lang['ctrt_help_own_raid'],
            'L_HELP_NAME'   => $this->_user->lang['ctrt_help_own_raid_name'],

            // Form validation
            'FV_NAME'        => $this->fv->generate_error('own_raid_name'),
        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $this->_eqdkp->config['guildtag'], $this->_eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/addownraid.html',
            'display'       => true)
        );
    }
}
?>
