<?php
include_once('Helper.php');
$user_id=$_REQUEST['update'];
echo $user_id;
$helper->update("user","is_active='1'","user_id='$user_id'");
header('Location:user_details.php');
