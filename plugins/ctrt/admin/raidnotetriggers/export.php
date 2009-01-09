<?php
/**
 * Export CT_RaidTracker Raid Note Triggers
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 182 $ $Date: 2008-02-19 00:28:36 -0800 (Tue, 19 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

/**
 * Export Raid Note Triggers
 * @subpackage ManageCTRT
 */
class CTRT_ExportRaidNoteTriggers extends CTRT_ManageRaidNoteTriggers {

    function CTRT_ExportRaidNoteTriggers()
    {
		$this->loadGlobals();
        $this->setMyMode('export');
        $this->assoc_buttons(array(
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
		include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ctrt_xml.php');
		$parser = new CTRT_XML();

		$daoRaidNoteTrigger = new CTRT_RaidNoteTrigger();
		$eventTriggers = $daoRaidNoteTrigger->getAll();
		
		$eventTrigger = array();
        foreach ( $eventTriggers as $trigger)
        {
			$eventTrigger[] = array("trigger"=>$trigger["raid_note_trigger_name"],"result"=>$trigger["raid_note_trigger_result"]);
        }
		
		$exportXML = $parser->xml_export(array("RaidNoteTriggers"=>array("RaidNoteTrigger"=>$eventTrigger)));

		$this->createMenus();
		
        $this->_tpl->assign_vars(array(
            // Form values
            'EXPORT'          	=> htmlentities($exportXML),

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],

            /**
             * Help text
             */
            'L_HELP'            => $this->_user->lang['ctrt_help_export'],

        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'],$this->_eqdkp->config['guildtag'],$this->_eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/export.html',
            'display'       => true)
        );
    }
}
?>
