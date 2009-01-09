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
 * $Rev: 193 $ $Date: 2008-02-25 09:55:32 -0800 (Mon, 25 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

/**
 * Display a list of member aliases. Provides mass delete and single alias add.
 * @subpackage ManageCTRT
 */
class CTRT_ListAliases extends CTRT_ManageAlias
{
     function CTRT_ListAliases()
    {
		$this->loadGlobals();

        $this->setMyMode('list');
        $this->assoc_buttons(array(
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

    /**
     * Display form
     */
    function display_form()
    {
        $this->createMenus();

        /**
         * Generate the list of aliases
         */
        $this->daoPlayerAlias = new CTRT_PlayerAlias;
        $playerAliases = $this->daoPlayerAlias->getAll();

		/**
		 * Generate the list of members
		 * TO DO this is very very sloppy & slow. make a new DAO gehTODO
		 */
		include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/dao/members.php');
		$this->daoMembers = new EQDKP_Members;

        foreach ($playerAliases as $row) {

			$member = $this->daoMembers->getByPrimaryKey($row['alias_member_id']);
            $this->_tpl->assign_block_vars('row', array(
                'ID'    	=> $row['alias_id'],
                'ROW_CLASS' => $this->_eqdkp->switch_row_class(),
                'COL1' 		=> $row['alias_name'],
                'COL2'  	=> $member[0]['member_name'],
                'U_ADD'   	=> $this->getControllerLink($this->getMyParam(),"add") . "&amp;" . URI_ID . "=".$row['alias_id'])
            );
        }

        $this->_tpl->assign_vars(array(
            // Form vars
            'F_CONFIG' 			=> $this->getControllerLink($this->getMyParam(),"add"),

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],

			// Column headings
			'L_COL1'			=> $this->_user->lang['ctrt_alias'],
			'L_COL2'			=> $this->_user->lang['member'],

            /**
             * Help text
             */
            'L_HELP'      		=> $this->_user->lang['ctrt_help_alias'],
            'L_DELETE'          => $this->_user->lang['delete'],

        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $this->_eqdkp->config['guildtag'], $this->_eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/list.html',
            'display'       => true)
        );
    }
}
?>
