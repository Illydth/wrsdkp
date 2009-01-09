<?php
/**
 * Add / Update CT_RaidTracker Event Triggers
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

/**
 * CTRT_AddEventTrigger process the CRUD events from the web form
 * @subpackage ManageCTRT
 */
class CTRT_AddEventTrigger extends CTRT_ManageEventTriggers
{
    var $data    = array();           // Holds event_trigger data if URI_ID is set         @var alias

    function CTRT_AddEventTrigger()
    {
        parent::eqdkp_admin();

        $this->loadGlobals();
        $this->setMyMode('add');
        $this->daoEventTrigger = new CTRT_EventTrigger;

        $this->data = array(
            'event_trigger_id'      => 0,
            'event_trigger_name'    => post_or_db('event_trigger_name'),
            'event_trigger_result'  => post_or_db('event_trigger_result')
        );

        // Vars used to confirm deletion
        $confirm_text = $this->_user->lang['ctrt_trigger_confirm_delete'];
        $event_trigger_ids = array();
        $event_trigger_names = array();
        if ( isset($_POST['delete']) )
        {
            if ( isset($_POST['compare_ids']) )
            {
                foreach ( $_POST['compare_ids'] as $keyID )
                {
                    $event_trigger = $this->daoEventTrigger->getByPrimaryKey($keyID);
                    $event_trigger_ids[] = $event_trigger[0]['event_trigger_id'];
                    $event_trigger_names[] = $event_trigger[0]['event_trigger_name'];
                }

                $names = implode(', ', $event_trigger_names);
                $ids = implode(', ', $event_trigger_ids);

                $confirm_text .= '<br />' . $names;
            }
            else
            {
                $failure_message = sprintf($this->_user->lang["ctrt_trigger_not_selected"]);
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
            'url_id'        => ( sizeof($event_trigger_ids) > 0 ) ? $ids : (( isset($_GET[URI_ID]) ) ? $_GET[URI_ID] : ''),
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
            $row = $this->daoEventTrigger->getByPrimaryKey($this->url_id);
            $this->data = array(
                'event_trigger_id'     => $row[0]['event_trigger_id'],
                'event_trigger_name'   => post_or_db('event_trigger_name', $row[0]),
                'event_trigger_result' => post_or_db('event_trigger_result', $row[0]),
            );
        }
    }

    function error_check()
    {
        if ( (isset($_POST['add'])) || (isset($_POST['update'])) ) {
            $this->fv->is_filled('event_trigger_name', $this->_user->lang['fv_required_name']);
            $this->fv->is_filled('event_trigger_result', $this->_user->lang['fv_required_name']);
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
            $old_data = $this->daoEventTrigger->getByPrimaryKey($id);

            // Remove the record
            $this->daoEventTrigger->deleteById($id);

            // Append success message
            $success_message .= sprintf($this->_user->lang["ctrt_trigger_success_delete"],$old_data[0]['event_trigger_name'], $old_data[0]['event_trigger_result']) . '<br />';
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
     * Update a record
     */
    function process_update()
    {
        // Make a copy of the data prior to updating
        $old_data = $this->daoEventTrigger->getByPrimaryKey($this->url_id);

        if(!$this->daoEventTrigger->update($this->data)) {
            // Error out if event trigger exists

            $failure_message = sprintf($this->_user->lang["ctrt_trigger_duplicate"],$_POST['event_trigger_name'],$_POST['event_trigger_result']);
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
            $success_message = sprintf($this->_user->lang['ctrt_trigger_success_update'], $old_data['event_trigger_name'], $old_data['event_trigger_result']);
            $link_list = array(
                $this->_user->lang['ctrt_adminmenu_list']  => $this->getControllerLink($this->getMyParam(),'list'),
                $this->_user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),'add'),
                $this->_user->lang['ctrt_adminmenu_export']  => $this->getControllerLink($this->getMyParam(),'export'),
                $this->_user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),'import'));
            $this->admin_die($success_message, $link_list);
        }
    }

    /**
     * Add a new record
     */
    function process_add()
    {
        $name = $_POST['event_trigger_name'];
        $result = $_POST['event_trigger_result'];

        if (!$this->daoEventTrigger->insert(array('event_trigger_name' => $name,
                                                  'event_trigger_result' => $result
                                                  ))) {
            // Error out if the trigger exists
            $failure_message = sprintf($this->_user->lang["ctrt_trigger_duplicate"],$name,$result);
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
                'header'                                => '{L_ACTION_CTRT_EVENT_TRIGGER_ADDED}',
                '{L_CTRT_LABEL_EVENT_TRIGGER_NAME}'     => $name,
                '{L_CTRT_LABEL_EVENT_TRIGGER_RESULT}'   => $result,

                '{L_ADDED_BY}'                  => $this->admin_user);

            $this->log_insert(array(
                'log_type'   => $log_action['header'],
                'log_action' => $log_action)
            );

            /**
             * Success message
             */
            $success_message = sprintf($this->_user->lang['ctrt_trigger_success_add'], $name, $result);
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
            'V_ID'          => ( isset($_POST['add']) ) ? '' : $this->data['event_trigger_id'],
            'ID'            => $this->data['event_trigger_id'],
            'NAME'          => $this->data['event_trigger_name'],
            'RESULT'        => $this->data['event_trigger_result'],

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],
            'L_TRIGGER'         => $this->_user->lang['ctrt_trigger'],
            'L_RESULT'          => $this->_user->lang['event'],

            // Buttons
            'S_ADD'     => ( !empty($this->url_id) ) ? false : true,
            'L_ADD'     => $this->_user->lang['add'],
            'L_UPDATE'  => $this->_user->lang['update'],
            'L_RESET'  => $this->_user->lang['reset'],

            /**
             * Help text
             */
            'L_HELP'        => $this->_user->lang['ctrt_help_event_trigger'],
            'L_HELP_NAME'   => $this->_user->lang['ctrt_help_event_trigger_name'],
            'L_HELP_RESULT' => $this->_user->lang['ctrt_help_event_trigger_result'],

            // Form validation
            'FV_NAME'        => $this->fv->generate_error('event_trigger_name'),
            'FV_RESULT'      => $this->fv->generate_error('event_trigger_result'),
        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/addeventtrigger.html',
            'display'       => true)
        );
    }
}
?>
