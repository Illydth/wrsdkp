<?php
/**
 * CT_RaidTracker Common functions
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 163 $ $Date: 2008-02-17 18:50:36 -0800 (Sun, 17 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

/**
 * getWoWHeadItemByID retrieves item inforomation from WoWHead.com based on ItemIDs or Item Names
 * @subpackage CTRTAdmin
 */
    function getWoWHeadItem ($itemIDorName) {
        global $eqdkp, $pm;

        include_once($eqdkp->root_path.'/itemstats/includes/xmlhelper.php');

        include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/ctrt_xml.php');
        include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/ctrt_urlhandler.php');

        include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/admin/xmltoarray.php');

        $parser = new CTRT_XML();
        $urlHandler = new CTRT_URLHandler ();
        $url = 'http://www.wowhead.com/?item='.str_replace(' ','+',$itemIDorName).'&xml';

        $xmlWoWHeadItem = $urlHandler->read ($url);
        $rawWoWHeadItem = $parser->xml_import($xmlWoWHeadItem);

        if (!isset($rawWoWHeadItem['WOWHEAD']['ERROR'])) {
            /**
             * Save only the fields we use in the plugin
             */
            $wowheadItem['name']        = $rawWoWHeadItem['WOWHEAD']['ITEM']['NAME'];
            $wowheadItem['wowid']       = $rawWoWHeadItem['WOWHEAD']['ITEM attr']['ID'];
            $wowheadItem['quality']     = $rawWoWHeadItem['WOWHEAD']['ITEM']['QUALITY attr']['ID'][0];
            $wowheadItem['icon']        = $rawWoWHeadItem['WOWHEAD']['ITEM']['ICON'];
            $wowheadItem['htmltooltip'] = $rawWoWHeadItem['WOWHEAD']['ITEM']['HTMLTOOLTIP'];
            $wowheadItem['link']        = $rawWoWHeadItem['WOWHEAD']['ITEM']['LINK'];

        } else {
            $wowheadItem['error']       = $rawWoWHeadItem['WOWHEAD']['ERROR'];
        }

        return $wowheadItem;
    }
?>
