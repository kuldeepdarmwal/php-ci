<?php
include_once('Helper.php');
$user_id=$_REQUEST['update'];
$helper->update("user","is_active='0'","user_id='$user_id'");
header('Location:user_details.php');
