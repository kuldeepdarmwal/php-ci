<?php
include_once('Helper.php');
/**
* This Helper_page class consist of a function required for LIMIT query in ProductViewPage.php
*
*The constructor is used to establish connection with database
*
*This class is inherited from Helper class
*/
class Helper_page extends Helper {
public function __construct($databasename) {
		try{
		parent::__construct($databasename);
		}catch(Exception $e){
		echo $e->errorMessage();
		}
	}
	/**
	* Fetches all values from the table in database with a condition
	*
	*@param string $field
	*
	*@param string $table
	*
	*@param string $condition
	*
	*@name sql
	*
	*@return $data
	*/
public function read_page($field, $table, $condition) {
		$sql="SELECT $field FROM $table $condition";
		try{
		$result=$this->con->query($sql);
		if ($result->num_rows==0) {
			return "No rows found";
			} else {
				while ($row=$result->fetch_array(MYSQL_ASSOC)) {
					$data[]=$row;
					}
					return $data;
				}
			}catch(Exception $e){
			echo $e->errorMessage();
		}
	}
	/**
	* Class destruct which closes connection
	*/
	public function __destruct() {
		try{
		 parent::__destruct();
		 } catch(Exception $e){
		echo $e->errorMessage();
		}
	}
}
/**
* Creates an object of an Helper_page
*/
$helper_page=new Helper_page("ecomm");

