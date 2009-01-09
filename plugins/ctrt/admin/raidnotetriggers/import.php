<?php
/**
 * Import CT_RaidTracker Raide Note Triggers
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
 * This class imports raid note triggers
 * @subpackage ManageCTRT
 */
class CTRT_ImportRaidNoteTriggers extends CTRT_ManageRaidNoteTriggers {

    var $_sampleXML = "
&lt;RaidNoteTriggers&gt;<br />
&nbsp;&nbsp;&lt;RaidNoteTrigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;trigger&gt;<span class=\"positive\">Bloodlord</span>&lt;/trigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;result&gt;<span class=\"positive\">Bloodlord Mandokir</span>&lt;/result&gt;<br />
&nbsp;&nbsp;&lt;/RaidNoteTrigger&gt;<br />
&nbsp;&nbsp;&lt;RaidNoteTrigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;trigger&gt;<span class=\"positive\">Fankriss</span>&lt;/trigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;result&gt;<span class=\"positive\">Fankriss the Unyielding</span>&lt;/result&gt;<br />
&nbsp;&nbsp;&lt;/RaidNoteTrigger&gt;<br />
&nbsp;&nbsp;&lt;RaidNoteTrigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;trigger&gt;<span class=\"positive\">Gruul</span>&lt;/trigger&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;result&gt;<span class=\"positive\">Gruul the Dragonkiller</span>&lt;/result&gt;<br />
&nbsp;&nbsp;&lt;/RaidNoteTrigger&gt;<br />
&lt;/RaidNoteTriggers&gt;";

    function CTRT_ImportRaidNoteTriggers()
    {
        parent::eqdkp_admin();

		$this->loadGlobals();
		$this->setMyMode('import');
        $this->daoRaidNoteTrigger = new CTRT_RaidNoteTrigger();
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
     * Import the raid note triggers
     */
    function process_import () {
        $message = "";

        $raidNoteTriggers = $this->parser->xml_import(stripslashes($_POST['xml']));							
        if (isset($raidNoteTriggers["RAIDNOTETRIGGERS"]["RAIDNOTETRIGGER"][0])) {
            $triggers = $raidNoteTriggers["RAIDNOTETRIGGERS"]["RAIDNOTETRIGGER"];
        } else {
            $triggers = array(0 => array("TRIGGER" => $raidNoteTriggers["RAIDNOTETRIGGERS"]["RAIDNOTETRIGGER"]["TRIGGER"],
                                         "RESULT"  => $raidNoteTriggers["RAIDNOTETRIGGERS"]["RAIDNOTETRIGGER"]["RESULT"]
                                ));
        }
				
        foreach ($triggers as $key=>$trigger) {

            if (!$this->daoRaidNoteTrigger->insert(array(
                                              'raid_note_trigger_name'=>$trigger['TRIGGER'],
                                              'raid_note_trigger_result'=>$trigger['RESULT'],
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
