<?php
/**
 * Export CT_RaidTracker Member Aliases
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

/**
 * This class exports one or multiple aliases
 * @subpackage ManageCTRT
 */
class CTRT_ExportAliases extends CTRT_ManageAlias {

    function CTRT_ExportAliases()
    {
		$this->loadGlobals();

        $this->setMyMode('export');
        $this->assoc_buttons(array(
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
		include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/ctrt_xml.php');
		include_once($this->_eqdkp->root_path.'plugins/'.$this->_pm->get_data('ctrt','path').'/admin/dao/members.php');

		$parser = new CTRT_XML();

		$playeralias = new CTRT_PlayerAlias();
		$playeraliases = $playeralias->getAllWithMemberName();
		
		$playeralias = array();
        foreach ( $playeraliases as $alias )
        {
			$playeralias[] = array("alias"=>$alias["alias_name"],"member"=>$alias["member_name"]);
        }
		
		$exportXML = $parser->xml_export(array("PlayerAliases"=>array("PlayerAlias"=>$playeralias)));

		$this->createMenus();
		
        $this->_tpl->assign_vars(array(
            // Form values
            'EXPORT'          	=> htmlentities($exportXML),

            // Language
			'L_PLUGIN_TITLE'	=> $this->_user->lang['ctrt'],

            /**
             * Help text
             */
            'L_HELP' 			=> $this->_user->lang['ctrt_help_export'],

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
