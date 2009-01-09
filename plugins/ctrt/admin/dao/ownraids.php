<?php
/**
 * OwnRaid Data Accessor for CTRT_RaidTracker
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 187 $ $Date: 2008-02-23 21:47:08 -0800 (Sat, 23 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Haxor!!!');
}
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path.'plugins/ctrt/admin/dao/dataaccessor.php');

/**
 * CRUD Class OwnRaid table
 * @subpackage CTRTDataAccessors
 */
class CTRT_OwnRaids extends CTRT_DataAccessor {

    var $_myTableName = CTRT_OWN_RAIDS_TABLE;
    var $_mySortOrder = 'own_raid_name';

    /**
     * Update a record
     * @var array $data Contains all values to be updated
     */
    function update($data) {

        if (!$this->isDuplicate($data)) {

            $this->doUpdate ($data[$this->getMyPrimaryKey()],
                             array('own_raid_name'=>$data['own_raid_name']
                            ));
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