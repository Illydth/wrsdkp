<?php
/**
 * PlayerAlias Data Accessor for CTRT_RaidTracker
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 227 $ $Date: 2008-03-21 23:00:57 -0700 (Fri, 21 Mar 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Haxor!!!');
}
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path.'plugins/ctrt/admin/dao/dataaccessor.php');

/**
 * CRUD Class DefaultValues table
 * @subpackage CTRTDataAccessors
 */
class CTRT_DefaultValue extends CTRT_DataAccessor {

    var $_myTableName = CTRT_DEFAULTVALUE_TABLE;
    var $_mySortOrder = 'item_name';

    /**
     * Update a record
     * @var array $data Contains all values to be updated
     */
    function update($data) {

        if (!$this->isDuplicate($data)) {

            $this->doUpdate ($data[$this->getMyPrimaryKey()],
                             array('item_name'=>$data['item_name'],
                                   'item_wowid'=>$data['item_wowid'],
                             	   'item_default_value'=>$data['item_default_value']));
        } else {
            return 0;
        }
        return 1;
    }

    /**
     * Insert a record
     * @var array $data Contains all column data to insert
     */
    function insert($data) {
        if (!$this->isDuplicate($data)) {
            $this->doInsert ($data);
        } else {
            return 0;
        }
        return 1;
    }
	
    //========================================
    // Getter / Setter methods
    //========================================

}
?>