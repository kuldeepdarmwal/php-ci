<?php
	include_once "Helper.php";
	session_start();
	$name=$_POST['UserName'];
	$mob=$_POST["Mobile"];
	$addr=$_POST["Address"];
	$user_id=$_SESSION['user'];
		$city=$_POST["City"];
	$city=$_POST["City"];
	$pinno=$_POST["PinCode"];
	$tableName="user_details";
	$obj=new Helper("ecomm");
	$field="mobile,address,city,zip,user_name,user_id";
	$obj->update($tableName,"mobile='$mob',address='$addr',city='$city',zip='$pinno'", "user_id='$user_id'");
	header("Location:OrderSummaryPageIncluded.php");
?>
