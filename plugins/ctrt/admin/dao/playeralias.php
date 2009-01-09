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
 * CRUD Class PlayerAlias table
 * @subpackage CTRTDataAccessors
 */
class CTRT_PlayerAlias extends CTRT_DataAccessor {

    var $_myTableName = CTRT_ALIASES_TABLE;
    var $_mySortOrder = 'alias_name';

    /**
     * Update a record
     * @var array $data Contains all values to be updated
     */
    function update($data) {

        if (!$this->isDuplicate($data)) {

            $this->doUpdate ($data[$this->getMyPrimaryKey()],
                             array('alias_name'=>$data['alias_name'],
                                   'alias_member_id'=>$data['alias_member_id']));
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

	function getAllWithMemberName() {

		$playeraliases = array();
			
        /**
         * Generate the list of aliases
         */
        $sql =   'SELECT alias_id, alias_name, alias_member_id, member_name
                    FROM ' . $this->getMyTableName() . ',
                         ' . MEMBERS_TABLE . '
                   WHERE member_id = alias_member_id';
        $sql .= ' ORDER BY '.$this->getMySortOrder();

        $result = $this->_db->query($sql);
        while ($row = $this->_db->fetch_record($result) )
        {
			$playeraliases[] = array("alias_id"=>$row["alias_id"],
			                         "alias_name"=>$row["alias_name"],
								     "alias_member_id"=>$row["alias_member_id"],
								     "member_name"=>$row["member_name"]
								    );
        }
        $this->_db->free_result($result);
		return $playeraliases;
	}
	
    //========================================
    // Getter / Setter methods
    //========================================

}
?>