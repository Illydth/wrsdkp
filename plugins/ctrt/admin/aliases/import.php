<?php
/**
 * Import CT_RaidTracker Member Aliases
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 196 $ $Date: 2008-03-08 08:52:51 -0800 (Sat, 08 Mar 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path.'plugins/ctrt/admin/ctrt_xml.php');

/**
 * This class imports one or multiple aliases
 * @subpackage ManageCTRT
 */
class CTRT_ImportAliases extends CTRT_ManageAlias {

    var $_sampleXML = "
&lt;PlayerAliases&gt;<br />
&nbsp;&nbsp;&lt;PlayerAlias&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;alias&gt;<span class=\"positive\">Twinkone</span>&lt;/alias&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;member&gt;<span class=\"positive\">Maintoon</span>&lt;/member&gt;<br />
&nbsp;&nbsp;&lt;/PlayerAlias&gt;<br />
&nbsp;&nbsp;&lt;PlayerAlias&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;alias&gt;<span class=\"positive\">Twinktwo</span>&lt;/alias&gt;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&lt;member&gt;<span class=\"positive\">Maintoon</span>&lt;/member&gt;<br />
&nbsp;&nbsp;&lt;/PlayerAlias&gt;<br />
&lt;/PlayerAliases&gt;";

    function CTRT_ImportAliases()
    {
        parent::eqdkp_admin();
        $this->loadGlobals();

        $this->setMyMode('import');
        $this->daoPlayerAlias = new CTRT_PlayerAlias();
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
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

        $this->createMenus();

        $tpl->assign_vars(array(
            // Form vars
            'XML'               => $_POST['xml'],
            'SAMPLE_XML'        => $this->_sampleXML,

            // Language
            'L_PLUGIN_TITLE'    => $user->lang['ctrt'],

            // Buttons
            'L_IMPORT'          => $user->lang['ctrt_import'],

            // Help text
            'L_HELP'            => $user->lang['ctrt_help_import'],
            'L_HELP_FORMAT'     => $user->lang["ctrt_help_import_format"],

            // Form validation
            'FV_INVALID_XML'        => $this->fv->generate_error('xmlError'),
        ));

        $eqdkp->set_vars(array(
            'page_title'    => sprintf($user->lang['admin_title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['ctrt_adminmenu_title'],
            'template_path' => $pm->get_data('ctrt', 'template_path'),
            'template_file' => 'admin/import.html',
            'display'       => true)
        );
    }

    /**
     * Validate the xml string
     */
    function error_check()
    {
        global $user;

        $xml = $this->parser->validateXML(stripslashes($_POST['xml']));
        if (!$xml) {
            $this->fv->is_filled('xmlError', $user->lang['ctrt_fv_invalid_xml']);
        }
        return $this->fv->is_error();
    }

    /**
     * Import the aliases
     */
    function process_import () {
        global $db, $eqdkp, $user, $tpl, $pm;
        global $SID;

        $message = "";

        $playerAliases = $this->parser->xml_import(stripslashes($_POST['xml']));

        if (isset($playerAliases["PLAYERALIASES"]["PLAYERALIAS"][0])) {
            foreach ($playerAliases["PLAYERALIASES"]["PLAYERALIAS"] as $playerAlias) {
                $aliases[] = array("alias"  => $playerAlias["ALIAS"],
                                   "member" => $playerAlias["MEMBER"]
                                );
            }
        } else {
            $aliases = array(0 => array("alias"  => $playerAliases["PLAYERALIASES"]["PLAYERALIAS"]["ALIAS"],
                                        "member" => $playerAliases["PLAYERALIASES"]["PLAYERALIAS"]["MEMBER"]
                                ));
        }

        foreach ($aliases as $key=>$playeralias) {

            // Make sure the both the member names are properly capitalized and formed
            $member_name = $this->daoPlayerAlias->getProperName($playeralias['member']);

            /**
             * The member name must exist
             */
            $sql = "SELECT member_id
                      FROM " . MEMBERS_TABLE ."
                     WHERE member_name = '".$member_name."'";
            $member_id = $db->query_first($sql);

            if ( isset($member_id) ) {
                /**
                 * Member name exists; insert the record
                 */
                if (!$this->daoPlayerAlias->insert (array('alias_name'=>$playeralias['alias'],
                                                          'alias_member_id'=>$member_id))) {
                    // Error out if alias name exists

                    /**
                     * Get the member name for this alias
                     */
                    $alias = $this->daoPlayerAlias->getAliasByName($playeralias['alias']);

                    $message .= sprintf($user->lang["ctrt_alias_duplicate"]."<br />",ucwords($playeralias['alias']),$member_name);
                } else {
                /* @TODO
                   IMPORT SUCCESS - LOG RECORD HERE */
                    $message .= sprintf($user->lang["ctrt_add_alias_success"]."<br />",ucwords($playeralias['alias']),$member_name);
                }
            } else {
                $message .= sprintf($user->lang["ctrt_alias_import_missing_member"]."<br />",ucwords($playeralias['alias']),$member_name);
            }
        }

        $link_list = array(
            $user->lang['ctrt_adminmenu_list'] => $this->getControllerLink($this->getMyParam(),"list"),
            $user->lang['ctrt_adminmenu_add']  => $this->getControllerLink($this->getMyParam(),"add"),
            $user->lang['ctrt_adminmenu_export'] => $this->getControllerLink($this->getMyParam(),"export"),
            $user->lang['ctrt_adminmenu_import'] => $this->getControllerLink($this->getMyParam(),"import"),
            );

        //
        // Success message
        //
        $this->admin_die($message, $link_list);
    }
}
?>
