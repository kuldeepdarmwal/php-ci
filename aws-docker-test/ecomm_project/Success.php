<?php
include_once "Helper.php";
$obj=new Helper("ecomm");

// Assigning posted values to variables.
$name = $_POST[ 'name' ];
$pass = $_POST[ 'password' ];
$field="'admin_name','password'";
$table="admin";
$condition=" admin_name='$name' AND password='$pass' ";
$result=$obj->read_record($field,$table ,$condition);

var_dump($result);
if (is_array($result)) {
	$_SESSION['name'] = $row['admin_name'];
	echo "Hi " . $name . "";
	header("Location: adminDashbordIncluded.php");
} else {
	//If the login credentials doesn't match, he will be shown with an error message.
	echo "Invalid Login Credentials.";
	header("Location: adminindex.php");
}
