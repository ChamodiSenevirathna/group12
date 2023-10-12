<?php 
session_start(); // start the session

session_unset(); // unset the session
session_destroy(); // destroy the session

header("Location: index.php"); // re-direct to the login page once the session is destroyed.

?>