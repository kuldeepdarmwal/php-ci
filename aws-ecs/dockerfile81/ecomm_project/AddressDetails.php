<?php
	include_once "Helper.php";
	session_start();
	$name=$_POST['FullName'];
	$mob=$_POST["Mobile"];
	$addr=$_POST["Address"];
	$user_id=$_SESSION['user'];
		$cit=$_POST["State"];
	$cit=$_POST["City"];
	$pinno=$_POST["PinCode"];
	$tableName="user_details";
	$obj=new Helper("ecomm");
	$val="'$mob','$addr','$cit','$pinno','$name','$user_id'";
	$field="mobile,address,city,zip,user_name,user_id";
	$obj->insert($tableName,$field,$val);
	header("Location:OrderSummaryPageIncluded.php");
?>
