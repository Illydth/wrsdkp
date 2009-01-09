<?php
/**
 * Update CT_RaidTracker Member Aliases
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 255 $ $Date: 2008-05-13 21:38:21 -0700 (Tue, 13 May 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/dao/members.php');

/**
 * CTRT_AddAlias process the CRUD events from the web form
 * @subpackage ManageCTRT
 */
class CTRT_AddAlias extends CTRT_ManageAlias
{
    var $data     = array();           // Holds alias data if URI_ID is set         @var alias

    function CTRT_AddAlias()
    {
        parent::eqdkp_admin();

        $this->loadGlobals();
        $this->setMyMode('add');
        $this->daoPlayerAlias = new CTRT_PlayerAlias;
        $this->daoMembers     = new EQDKP_Members;

        $this->data = array(
            'alias_id'          => 0,
            'alias_member_id'   => post_or_db('alias_member_id'),
            'alias_name'        => $this->daoPlayerAlias->getProperName(post_or_db('alias_name'))
        );

        // Vars used to confirm deletion
        $confirm_text = $this->_user->lang['ctrt_confirm_delete_alias'];
        $alias_ids = array();
        if ( isset($_POST['delete']) )
        {
            if ( isset($_POST['compare_ids']) )
            {
                foreach ( $_POST['compare_ids'] as $keyID )
                {
                    $alias_name = $this->daoPlayerAlias->getByPrimaryKey($keyID);
                    $alias_names[] = $alias_name[0]['alias_name'];
                    $alias_ids[] = $alias_name[0]['alias_id'];
                }

                $names = implode(', ', $alias_names);
                $ids = implode(', ', $alias_ids);

                $confirm_text .= '<br />' . $names;
            }
            else
            {
                $failure_message = sprintf($this->_user->lang["ctrt_no_alias_selected"]);
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
            'url_id'        => ( sizeof($alias_ids) > 0 ) ? $ids : (( isset($_GET[URI_ID]) ) ? $_GET[URI_ID] : ''),
            'script_name'   => $this->getControllerLink($this->getMyParam(),$this->getMyMode()))
        );

        $this->assoc_buttons(array(
            'add' => array(
                'name'    => 'add',
                'process' => 'process_add',
                'check'   => 'a_members_man'),
            'update' => array(
                'name'    => 'update',
                'process' => 'process_update',
                'check'   => 'a_members_man'),
            'delete' => array(
                'name'    => 'delete',
                'process' => 'process_delete',
                'check'   => 'a_members_man'),
            'form' => array(
                'name'    => '',
                'process' => 'display_form',
                'check'   => 'a_members_man'))
        );

        // Build the alias array
        // ---------------------------------------------------------
        if ( !empty($this->url_id) )
        {
            $row = $this->daoPlayerAlias->getByPrimaryKey($this->url_id);
			$member = $this->daoMembers->getbyPrimaryKey($row[0]['alias_member_id']);
            $this->data = array(
                'alias_id'          => $row[0]['alias_id'],
                'alias_member_id'   => post_or_db('alias_member_id', $row[0]),
                'alias_name'        => $this->daoPlayerAlias->getProperName(post_or_db('alias_name', $row[0])),
				'member_name'		=> $member[0]['member_name'],
            );
        }
    }

    function error_check()
    {
        if ( (isset($_POST['add'])) || (isset($_POST['update'])) ) {
            $this->fv->is_filled('alias_name', $this->_user->lang['fv_required_name']);
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
            $old_data = $this->daoPlayerAlias->getByPrimaryKey($id);

            // Remove the record
            $this->daoPlayerAlias->deleteById($id);

            // Append success message
            $success_message .= sprintf($this->_user->lang["ctrt_alias_deleted"],$old_data[0]['alias_name'], $old_data[0]['member_name']) . '<br />';
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
        $old_data = $this->daoPlayerAlias->getByPrimaryKey($this->url_id);

		/**
		 * Get the member name for this alias
		 */
		$member = $this->daoMembers->getbyPrimaryKey($old_data[0]['alias_member_id']);
		$alias_name = $this->daoPlayerAlias->getProperName($_POST['alias_name']);
		
        if(!$this->daoPlayerAlias->update($this->data)) {
            // Error out if alias name exists

            $failure_message = sprintf($this->_user->lang["ctrt_alias_duplicate"],$alias_name,$member[0]['member_name']);
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
            $success_message = sprintf($this->_user->lang['ctrt_alias_update_success'], $old_data[0]['alias_name'], $alias_name, $member[0]['member_name']);
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
		$alias_name = $this->daoPlayerAlias->getProperName($_POST['alias_name']);
		$alias_member_id = $_POST['alias_member_id'];

		/**
		 * Get the member name for this alias
		 */
		include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/dao/members.php');
		$this->daoMembers = new EQDKP_Members;
		$member = $this->daoMembers->getbyPrimaryKey($alias_member_id);
		$member_name = $member[0]['member_name'];

        if (!$this->daoPlayerAlias->insert(array('alias_name' => $alias_name,
                                                 'alias_member_id' => $alias_member_id
                                                 ))) {
            // Error out if alias name exists

            $failure_message = sprintf($this->_user->lang["ctrt_alias_duplicate"],$alias_name,$member_name);
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
            $log_action = array(
                'header'                        => '{L_ACTION_CTRT_ALIAS_ADDED}',
                '{L_CTRT_LABEL_ALIAS_NAME}'     => $alias_name,
                '{L_CTRT_LABEL_MEMBER_NAME}'    => $member_name,

                '{L_ADDED_BY}'                  => $this->admin_user);

            $this->log_insert(array(
                'log_type'   => $log_action['header'],
                'log_action' => $log_action)
            );

            /**
             * Success message
             */
            $success_message = sprintf($this->_user->lang['ctrt_add_alias_success'], $alias_name, $member_name);
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

        /**
         * Generate the list of members
         */
		include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/dao/members.php');
        $this->daoMembers = new EQDKP_Members;
        $members = $this->daoMembers->getAll();
		
        foreach ($members as $member) {
            $this->_tpl->assign_block_vars('members_row', array(
                'VALUE'    => $member['member_id'],
                'SELECTED' => ( $this->alias['alias_member_id'] == $member['member_id'] ) ? ' selected="selected"' : '',
                'OPTION'   => $member['member_name'])
            );
        }

        $this->_tpl->assign_vars(array(
            // Form vars
            'F_CONFIG' => $this->getControllerLink($this->getMyParam(),$this->getMyMode()),

            // Form values
            'V_ID'        => ( isset($_POST['add']) ) ? '' : $this->data['alias_id'],
            'ID'          => $this->data['alias_id'],
            'ALIAS_NAME'  => $this->data['alias_name'],
            'MEMBER_NAME' => $this->data['member_name'],

            // Language
            'L_MEMBER'      => $this->_user->lang['member'],
            'L_NAME'        => $this->_user->lang['name'],
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],

            // Buttons
            'S_ADD'         => ( !empty($this->url_id) ) ? false : true,
            'L_ADD'         => $this->_user->lang['add'],
            'L_UPDATE'      => $this->_user->lang['update'],
            'L_RESET'       => $this->_user->lang['reset'],

            /**
             * Help text
             */
            'L_HELP'              => $this->_user->lang['ctrt_help_alias'],
            'L_HELP_NAME'         => $this->_user->lang['ctrt_help_alias_name'],
            'L_HELP_RESULT'       => $this->_user->lang['ctrt_help_alias_member'],


            // Form validation
            'FV_NAME'        		=> $this->fv->generate_error('alias_name'),
        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/addalias.html',
            'display'       => true)
        );
    }
}
?>
