<?php
include_once('Helper.php');
$user_id=$_REQUEST['delete'];
echo $user_id;
$helper->delete("user","user_id='$user_id'");
header('Location:user_details.php');
