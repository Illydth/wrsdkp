<?php
/**
 * List CT_RaidTracker Own Raids
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
 * Display a list of own raids. Provides mass delete.
 * @subpackage ManageCTRT
 */
class CTRT_ListOwnRaids extends CTRT_ManageOwnRaids
{
    function CTRT_ListOwnRaids()
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
         * Generate the list of own raids
         */
        $this->daoOwnRaids = new CTRT_OwnRaids;

        $ownRaids = $this->daoOwnRaids->getAll();
        foreach ($ownRaids as $row) {
            $this->_tpl->assign_block_vars('row', array(
                'ID'        => $row['own_raid_id'],
                'ROW_CLASS' => $this->_eqdkp->switch_row_class(),
                'COL1'      => $row['own_raid_name'],
                'U_ADD'     => $this->getControllerLink($this->getMyParam(),"add") . "&amp;" . URI_ID . "=".$row['own_raid_id'])
            );
        }

        $this->_tpl->assign_vars(array(
            // Form vars
            'F_CONFIG' => $this->getControllerLink($this->getMyParam(),"add"),

            // Language
            'L_PLUGIN_TITLE'    => $this->_user->lang['ctrt'],
            'L_COL1'            => $this->_user->lang['ctrt_own_raid'],
            'L_COL2'            => '',

            /**
             * Help text
             */
            'L_HELP'            => $this->_user->lang['ctrt_help_own_raid'],
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
