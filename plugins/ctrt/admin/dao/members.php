<?php
/**
 * Members Data Accessor for CTRT_RaidTracker
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
 * CRUD Class Members table
 * @subpackage CTRTDataAccessors
 */
class EQDKP_Members extends CTRT_DataAccessor {

    var $_myTableName = MEMBERS_TABLE;
    var $_mySortOrder = 'member_name';

    /**
     * Update a record
     * @var array $data Contains all values to be updated
     */
    function update($data) { 
		// do nothing for now
        return 1;
    }

    /**
     * Insert a record
     * @var array $data Contains all column data to insert
     */
    function insert($data) {
		// do nothing for now
        return 1;
    }

    //========================================
    // Getter / Setter methods
    //========================================

}
?>