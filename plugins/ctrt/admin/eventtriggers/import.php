<?php
/**
 * Import CT_RaidTracker Event Triggers
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 257 $ $Date: 2008-05-14 00:09:13 -0700 (Wed, 14 May 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path.'plugins/ctrt/admin/ctrt_xml.php');

/**
 * This class imports event triggers
 * @subpackage ManageCTRT
 */
class CTRT_ImportEventTriggers extends CTRT_ManageEventTriggers {

    var $_sampleXML = "
&lt;EventTriggers&gt;<br />
&nbsp;&nbsp;&lt;EventTrigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;trigger&gt;<span class=\"positive\">Kazzak</span>&lt;/trigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;result&gt;<span class=\"positive\">World Bosses</span>&lt;/result&gt;<br />
&nbsp;&nbsp;&lt;/EventTrigger&gt;<br />
&nbsp;&nbsp;&lt;EventTrigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;trigger&gt;<span class=\"positive\">Onyxia</span>&lt;/trigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;result&gt;<span class=\"positive\">Onyxia's Lair</span>&lt;/result&gt;<br />
&nbsp;&nbsp;&lt;/EventTrigger&gt;<br />
&nbsp;&nbsp;&lt;EventTrigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;trigger&gt;<span class=\"positive\">Ahn'Qiraj Ruins</span>&lt;/trigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;result&gt;<span class=\"positive\">Ruins of Ahn'Qiraj</span>&lt;/result&gt;<br />
&nbsp;&nbsp;&lt;/EventTrigger&gt;<br />
&lt;/EventTriggers&gt;";

    function CTRT_ImportEventTriggers()
    {
        parent::eqdkp_admin();

		$this->loadGlobals();
		$this->setMyMode('import');
        $this->daoEventTrigger = new CTRT_EventTrigger();
        $this->parser = new CTRT_XML();

        $this->assoc_buttons(array(
            'import' => array(
                'name'    => 'import',
                'process' => 'process_import',
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

        $this->_tpl->assign_vars(array(
            // Form vars
            'XML'               => $_POST['xml'],
            'SAMPLE_XML'        => $this->_sampleXML,

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],

            // Buttons
            'L_IMPORT'          => $this->_user->lang['ctrt_import'],

            // Help text
            'L_HELP'            => $this->_user->lang['ctrt_help_import'],
            'L_HELP_FORMAT'     => $this->_user->lang["ctrt_help_import_format"],

            // Form validation
            'FV_INVALID_XML'        => $this->fv->generate_error('xmlError'),

        ));

        $this->_eqdkp->set_vars(array(
            'page_title'    => sprintf($this->_user->lang['admin_title_prefix'], $this->_eqdkp->config['guildtag'], $this->_eqdkp->config['dkp_name']).': '.$this->_user->lang['ctrt_adminmenu_title'],
            'template_path' => $this->_pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/import.html',
            'display'       => true)
        );
    }

    /**
     * Validate the xml string
     */
    function error_check()
    {
        $xml = $this->parser->validateXML(stripslashes($_POST['xml']));
        if (!$xml) {
            $this->fv->is_filled('xmlError', $this->_user->lang['ctrt_fv_invalid_xml']);
        }
        return $this->fv->is_error();
    }

    /**
     * Import the event triggers
     */
    function process_import () {
        $message = "";
        $eventTriggers = $this->parser->xml_import(stripslashes($_POST['xml']));
        if (isset($eventTriggers["EVENTTRIGGERS"]["EVENTTRIGGER"][0])) {
            $triggers = $eventTriggers["EVENTTRIGGERS"]["EVENTTRIGGER"];
        } else {
            $triggers = array(0 => array("TRIGGER" => $eventTriggers["EVENTTRIGGERS"]["EVENTTRIGGER"]["TRIGGER"],
                                         "RESULT"  => $eventTriggers["EVENTTRIGGERS"]["EVENTTRIGGER"]["RESULT"]
                                ));
        }

        foreach ($triggers as $key=>$trigger) {

            if (!$this->daoEventTrigger->insert(array(
                                              'event_trigger_name'=>$trigger['TRIGGER'],
                                              'event_trigger_result'=>$trigger['RESULT'],
                                              ))) {
                /**
                 * This trigger exists
                 */
                $message .= sprintf($this->_user->lang["ctrt_trigger_duplicate"]."<br />",
                                    $trigger['TRIGGER'],
                                    $trigger['RESULT']);
            } else {
            /* @TODO
               IMPORT SUCCESS - LOG RECORD HERE */
                $message .= sprintf($this->_user->lang["ctrt_trigger_success_add"]."<br />",
                                    $trigger['TRIGGER'],
                                    $trigger['RESULT']);
            }
        }

        $link_list = array(
					$this->_user->lang['ctrt_adminmenu_list']  => $this->getControllerLink($this->getMyParam(),'list'),
					$this->_user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),'add'),
					$this->_user->lang['ctrt_adminmenu_export']  => $this->getControllerLink($this->getMyParam(),'export'),
					$this->_user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),'import'));

        //
        // Success message
        //
        $this->admin_die($message, $link_list);
    }
}
?>
