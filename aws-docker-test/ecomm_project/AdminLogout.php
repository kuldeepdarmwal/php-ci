<?php
// Inialize session
session_start();

// Delete certain session
unset($_SESSION['name']);
  
header("Location: adminindex.php");

//session_destroy();
?>