<?php
include_once "Helper.php";
include_once "GenericClass.php";
session_start();
$objSummary=new GenericClass();
$objSummary->checkFunctionSummery($_SESSION[ 'email' ], $_SESSION[ 'pass' ]);
?>
