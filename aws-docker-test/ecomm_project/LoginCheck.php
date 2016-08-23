<?php
include_once "Helper.php";
include_once "GenericClass.php";
session_start();
$objLoginCheck=new GenericClass();
$objLoginCheck->checFunLogin($_POST[ 'email' ],$_POST[ 'pass' ]);
$emailid=$_POST[ 'email' ];
$SESSION['email']=$emailid;
