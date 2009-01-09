<?php
/**
 * Export CT_RaidTracker Event Triggers
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 246 $ $Date: 2008-04-20 19:56:46 -0700 (Sun, 20 Apr 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

/**
 * This class exports event triggers
 * @subpackage ManageCTRT
 */
class CTRT_ExportEventTriggers extends CTRT_ManageEventTriggers {

    function CTRT_ExportEventTriggers()
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

		$daoEventTrigger = new CTRT_EventTrigger();
		$eventTriggers = $daoEventTrigger->getAll();
		
		$eventTrigger = array();
        foreach ( $eventTriggers as $trigger)
        {
			$eventTrigger[] = array("trigger"=>$trigger["event_trigger_name"],"result"=>$trigger["event_trigger_result"]);
        }
		
		$exportXML = $parser->xml_export(array("EventTriggers"=>array("EventTrigger"=>$eventTrigger)));

		$this->createMenus();
		
        $this->_tpl->assign_vars(array(
            // Form values
            'EXPORT'          	=> htmlentities($exportXML),

            // Language
			'L_PLUGIN_TITLE'	=> $this->_user->lang['ctrt'],

            /**
             * Help text
             */
            'L_HELP'            => $this->_user->lang['ctrt_help_export'],

        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $this->_eqdkp->config['guildtag'], $this->_eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/export.html',
            'display'       => true)
        );
    }
}
?>
