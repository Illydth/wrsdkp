<?php
/**
 * List CT_RaidTracker Event Triggers
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 195 $ $Date: 2008-03-08 07:45:12 -0800 (Sat, 08 Mar 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

/**
 * Display a list of event triggers. Provides mass delete.
 * @subpackage ManageCTRT
 */
class CTRT_ListEventTriggers extends CTRT_ManageEventTriggers
{
    function CTRT_ListEventTriggers()
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
         * Generate the list of event triggers
         */
        $this->daoEventTrigger = new CTRT_EventTrigger;
        $eventTriggers = $this->daoEventTrigger->getAll();

        foreach ($eventTriggers as $row) {
            $this->_tpl->assign_block_vars('row', array(
                'ID'    	=> $row['event_trigger_id'],
                'ROW_CLASS' => $this->_eqdkp->switch_row_class(),
                'COL1' 		=> $row['event_trigger_name'],
                'COL2'  	=> $row['event_trigger_result'],
                'U_ADD'   	=> $this->getControllerLink($this->getMyParam(),"add") . "&amp;" . URI_ID . "=".$row['event_trigger_id'])
            );
        }

        $this->_tpl->assign_vars(array(
            // Form vars
            'F_CONFIG' => $this->getControllerLink($this->getMyParam(),"add"),

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],
			
			// Column headings
			'L_COL1'			=> $this->_user->lang['ctrt_trigger'],
			'L_COL2'			=> $this->_user->lang['event'],

            /**
             * Help text
             */
            'L_HELP'            => $this->_user->lang['ctrt_help_event_trigger'],
            'L_DELETE'  		=> $this->_user->lang['delete'],

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
