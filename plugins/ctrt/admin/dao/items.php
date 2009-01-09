<?php
/**
 * Items Data Accessor for CTRT_RaidTracker
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 173 $ $Date: 2008-02-18 21:18:53 -0800 (Mon, 18 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Haxor!!!');
}
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path.'plugins/ctrt/admin/dao/dataaccessor.php');

/**
 * CRUD Class Items table
 * @subpackage CTRTDataAccessors
 */
class CTRT_Items extends CTRT_DataAccessor {

	var $_myTableName = CTRT_ITEMS_TABLE;
	var $_mySortOrder = 'items_name';
	
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