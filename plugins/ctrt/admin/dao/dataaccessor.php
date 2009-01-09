<?php
/**
 * Base Data Accessor object for CTRT_RaidTracker
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 204 $ $Date: 2008-03-08 14:39:14 -0800 (Sat, 08 Mar 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Haxor!!!');
}
$eqdkp_root_path = './../../';
include_once($eqdkp_root_path.'common.php');
include_once($eqdkp->root_path.'plugins/'.$pm->get_data('ctrt','path').'/config.php');
include_once($eqdkp->root_path.'plugins/ctrt/admin/ctrt_base.php');

/**
 * Class for managing data access
 * @subpackage CTRTDataAccessors
 */
class CTRT_DataAccessor extends CTRT_Base {

    /**
     * The name of the table upon which I am operating
     */
    var $_myTableName   = '';
    var $_myColumns     = '';
    var $_myPrimaryKey  = '';
    var $_mySortOrder   = '';

    function CTRT_DataAccessor () {

        $this->loadGlobals ();
        $this->setColums($this->getMyTableName());
    }

    /**
     * extract table column names, primary keys, and uniqueness
     * @var string $tableName specifies the table to get the column descriptions
     */
    function setColums ($tableName) {

        $sql = 'SHOW COLUMNS FROM '.$tableName;
        $result = $this->_db->query($sql);

        while ( $row = $this->_db->fetch_record($columns) ) {
            $this->_myColumns['columns'][] = $row['Field'];
            $extra = '';
            if ($row['Key'] == 'PRI') {
                $this->_myColumns['keys'][] = $row['Field'];
            }
            if ($row['Key'] == 'UNI') {
                $this->_myColumns['unique'][] = $row['Field'];
            }
        }
    }

    /**
     * Insert a record into the database
     * @var string $table
     * @var array $data
     */
    function doInsert($data) {
		$data = $this->prepForSave($data);
		
        $query = $this->_db->build_query('INSERT', $data);
        $this->_db->query('INSERT INTO ' . $this->getMyTableName() . $query);

        return 1;
    }

    /**
     * Update a record
     * @var $data Contains all column names and values to be updated
     */
     function doUpdate($key, $data) {
		$data = $this->prepForSave($data);
		
		foreach ($data as $col=>$val) {
			$data[$col] = addslashes($val);
		}
		
        // Update the member
        $query = $this->_db->build_query('UPDATE', $data);
        $this->_db->query('UPDATE ' . $this->getMyTableName() . ' SET ' . $query . " WHERE ".$this->getMyPrimaryKey()."=" . $key);

        return 1;
    }

    /**
     * Delete a record by its ID
     */
    function deleteById($id) {
        $this->_db->query('DELETE FROM ' . $this->getMyTableName() . " WHERE ".$this->getMyPrimaryKey()."=" . $id . "");
        return 1;
    }


    /**
     * Get all records for the object
     */
    function getAll () {
        return $this->getRecord();
    }

    /**
     * Get a single record for the object based on it's primary key
     * @var mixed $key a primary key value
     */
    function getByPrimaryKey ($key) {
        if (isset($key)) {
            return $this->getRecord(array($this->getMyPrimaryKey() => "'".$key."'"));
        } else {
            return 0;
        }
    }

    /**
     * Get one or more records based on the criteria passed
     * @var mixed $criteria The specific record to retieve
     */
    function getRecord ($criteria = '') {

        /**
         * Build list of columns to retrieve
         */
        $sql =   'SELECT '.implode(', ', $this->getColumnNames()).'
                    FROM ' . $this->getMyTableName() . ' ';

        /**
         * explode criteria
         */
        if (is_array($criteria)) {
            $sql .= 'WHERE ';
            foreach ($criteria as $column=>$value) {
                $whereCriteria[] = $column.'='.$value;
            }
            $sql .= implode (', ',$whereCriteria);
        }

        $sql .= ' ORDER BY '.$this->getMySortOrder();

        $result = $this->_db->query($sql);

        $records = array();
        $myColumns = $this->getColumnNames();
        while ($row = $this->_db->fetch_record($result) )
        {
            foreach ($myColumns as $column) {
                $myRow[$column] = stripslashes($row[$column]);
            }
            $records[] = $myRow;
        }
        $this->_db->free_result($result);

        return $records;
    }

    /**
     * Get a single record for the object based on it's ID
     * @var integer $id The id of the record to retrieve
     */
    function getByID ($id) {
        if (isset($id) && is_numeric($id)) {
            return $this->getRecord(CTRT_GET_BY_ID, $id);
        } else {
            return 0;
        }
    }

    /**
     * Get a single record for the object based on it's ID
     * @var integer $id The id of the record to retrieve
     */
    function getByName ($name) {
        if (isset($name)) {
            return $this->getRecord(CTRT_GET_BY_NAME, mysql_real_escape_string($name));
        } else {
            return 0;
        }
    }

    /**
     * Get a single record for the object based on it's ID
     */
    function getInsertId () {
        return $this->_db->insert_id();
    }

    /**
     * Checks a name / result combo against database for duplicate
     * @var int $key primary key used to filter this record out
     * @var string $name own raid name
     */
    function isDuplicate($data) {
        $data = $this->escapeTableData($data);
        $duplicate = false;
        /**
         * Check insert data against our unique colums
         */
        $uniqueCols = $this->getColumnNamesUnique();
		$primaryKeyCol = $this->getMyPrimaryKey();
        foreach ($uniqueCols as $column) {
            foreach ($data as $key=>$value) {

                if ($key == $column) {
                    $sql = 'SELECT '.$key.'
                              FROM '.$this->getMyTableName().'
                             WHERE '.$key.' = \''.$value.'\'';
							 
					if (isset($data[$primaryKeyCol])) {
						$sql .= ' AND '.$primaryKeyCol.' != '.$data[$primaryKeyCol].'';
					}
					
                    $record = $this->_db->query_first($sql);
                    if (isset($record)) {
                        $duplicate = true;
                    }
                }
            }
        }
        return $duplicate;
    }

    /**
     * prepForSave trims whitespace and removes slashes from strings to be saved in DB
     * @var mixed $tableData an array where key = column name and value = column data
     */
	function prepForSave($tableData) {
        foreach ($tableData as $key=>$value) {
            if (!is_numeric($value)) {
				$tableData[$key] = stripslashes(trim($value));
			}
        }
        return $tableData;
	}
	
    /**
     * escapeTableData escapes all string values in array values in prep for comparison
     * @var mixed $tableData an array where key = column name and value = column data
     */
    function escapeTableData($tableData) {
        foreach ($tableData as $key=>$value) {
            if (!is_numeric($value)) {
				$tableData[$key] = mysql_real_escape_string(trim($value));
			}
        }
        return $tableData;
    }

    //========================================
    // Getter / Setter methods
    //========================================

    /**
     * Get / Set the name of my table
     */
    function setMyTableName($table_name) { $this->_myTableName = $table_name; return 1; }
    function getMyTableName() { return $this->_myTableName; }

    /**
     * Get / Set the primary key
     */
    function setMyPrimaryKey($key_name) { $this->_myColumns['keys'] = array($key_name); return 1; }
    function getMyPrimaryKey() {
        return $this->_myColumns['keys'][0];
    }

    /**
     * Get / Set column sort order
     */
    function setMySortOrder ($sortOrder) { $this->_mySortOrder = $sortOrder; return 1;}
    function getMySortOrder () { return $this->_mySortOrder; }

    /**
     * Get a listing of all column names for this table
     */
    function getColumnNames () {
        return ($this->_myColumns['columns']);

    }

    /**
     * Get a listing of all column names that are unique
     */
    function getColumnNamesUnique () {
        return ($this->_myColumns['unique']);

    }
}
?>