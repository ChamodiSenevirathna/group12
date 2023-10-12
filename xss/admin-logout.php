<?php 
session_start(); // start the login session

session_unset(); // unset the login sessiom
session_destroy(); // destroy the session

header("Location: admin-login.php"); // re-direct to admin login page

?>