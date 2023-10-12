<?php
// contact page back-end process

// start the login session
session_start();

// get the user entered values for full name, subject and message from the contact us form
// Vulnerability: 
    // application inserts the data into the database without any validation or sanitization
$fname = $_POST['fname'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// define the parameters to connect with the database
$sname = "mysql_db"; // server name
$uname = "root"; // server username
$password = "root"; // server password
$db_name = "test_db"; // database name

// connection
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// if there's a connection error, this will display the error
if (mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_errno());
}

// sql query to insert data into the contact table
$sql = "INSERT INTO contact (fname, subject, message) VALUES('$fname', '$subject', '$message')";

// pass the connection and the query to execute
$result = mysqli_query($conn, $sql);

// after completing the process, page will navigate to the contact.php (contact us) page
header("Location: contact.php");
