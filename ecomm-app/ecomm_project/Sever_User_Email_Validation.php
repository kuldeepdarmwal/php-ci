<?php
/**
*Sever_User_Email_Validation class performs server side email validation
*/
class Sever_User_Email_Validation extends Helper {
/**
*
*class constructor ,checks from database whether email exists or not.
*
*@param string $databasename
*
*/
public function __construct ($databasename) {
		parent::__construct($databasename);
	}
/**************email_Exitence Function*****************
/**
*
*Checks wheteher email is present in database or not
*
*@param string $field
*
*@param string $table
*
*@param string $condition
*
*@var array
*
*@name sql
*/
public function email_Exitence ($field, $table, $condition) {
		echo "$field &&";
		echo " $table &&";
		echo " $condition";
		$sql="SELECT $field FROM $table WHERE $condition";
		try {
		$result=$this->con->query($sql);
		$row_cnt = mysqli_num_rows($result);
		if ($row_cnt > 0) {
			return true;
		} else {
			return false;
		}
	  } catch (Exception $e) {
	    echo $e->errorMessage();
	   }
	}
	/**
	* Calls Destructor,which disconnects db connection.
	*/
	public function __destruct() {
		try{
		 parent::__destruct();
		 } catch ( Exception $e) {
		  echo $e->errorMessage();
		 }
	}
}
$sever_User_Email_Validation=new Sever_User_Email_Validation("ecomm");
