<?php 
// xss protection 
// Enables XSS filtering. Rather than sanitizing the page, the browser will prevent rendering of the page if an attack is detected.
header("X-XSS-Protection: 1; mode=block");

session_start(); // start the session

session_unset(); // unset the session
session_destroy(); // destroy the session

header("Location: admin-login.php"); // re-direct to the legin page once the session is destroyed

?>