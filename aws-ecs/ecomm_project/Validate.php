<?php
session_start();

if($_REQUEST['btn_submit']=="Address")
{

header("Location:updateAddressIncluded.php");
}

if($_REQUEST['btn_submit']=="Confirm")
{

header("Location:Confirm.php");
}

if($_REQUEST['btn_submit']=="Cancel")
{
header("Location:index.php");
}  
?>