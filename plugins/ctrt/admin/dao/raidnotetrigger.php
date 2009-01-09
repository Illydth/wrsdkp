<?php
/**
 * RaidNoteTrigger Data Accessor for CTRT_RaidTracker
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
 * CRUD Class RaidNoteTrigger table
 * @subpackage CTRTDataAccessors
 */
class CTRT_RaidNoteTrigger extends CTRT_DataAccessor {

    var $_myTableName = CTRT_RAID_NOTE_TRIGGERS_TABLE;
    var $_mySortOrder = 'raid_note_trigger_name';

    /**
     * Update a record
     * @var array $data Contains all values to be updated
     */
    function update($data) {

        if (!$this->isDuplicate($data)) {

            $this->doUpdate ($data[$this->getMyPrimaryKey()],
                             array('raid_note_trigger_name'=>$data['raid_note_trigger_name'],
                                   'raid_note_trigger_result'=>$data['raid_note_trigger_result']
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