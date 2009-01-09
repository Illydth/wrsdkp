<?php
/**
 * List CT_RaidTracker Raid Note Triggers
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
 * Display a list of raid note triggers. Provides mass delete.
 * @subpackage ManageCTRT
 */
class CTRT_ListRaidNoteTriggers extends CTRT_ManageRaidNoteTriggers
{
    function CTRT_ListRaidNoteTriggers()
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
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

        $this->createMenus();

        /**
         * Generate the list of event triggers
         */
        $this->daoRaidNoteTrigger = new CTRT_RaidNoteTrigger;

        $eventTriggers = $this->daoRaidNoteTrigger->getAll();

        foreach ($eventTriggers as $row) {
            $tpl->assign_block_vars('row', array(
                'ID'    	=> $row['raid_note_trigger_id'],
                'ROW_CLASS' => $eqdkp->switch_row_class(),
                'COL1' 		=> $row['raid_note_trigger_name'],
                'COL2'  	=> $row['raid_note_trigger_result'],
                'U_ADD'   	=> $this->getControllerLink($this->getMyParam(),"add") . "&amp;" . URI_ID . "=".$row['raid_note_trigger_id'])
            );
        }

        $tpl->assign_vars(array(
            // Form vars
            'F_CONFIG' => $this->getControllerLink($this->getMyParam(),"add"),

            // Language
            'L_PLUGIN_TITLE'    => $user->lang['ctrt'],
			
			// Cloumn headings
			'L_COL1'			=> $user->lang['ctrt_trigger'],
			'L_COL2'			=> $user->lang['ctrt_raid_note'],

            /**
             * Help text
             */
            'L_HELP'            => $user->lang['ctrt_help_raid_note_trigger'],
            'L_DELETE'  		=> $user->lang['delete'],

        ));

        $eqdkp->set_vars(array(
            'page_title'    => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['ctrt_adminmenu_title'].": ".$user->lang['ctrt_adminmenu_'.$this->getMyParam()."_".$this->getMyMode()],
            'template_path' => $pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/list.html',
            'display'       => true)
        );
    }
}
?>
