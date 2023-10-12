<?php
//  register back-end process

// get the user entered values for username, email and password from the register form
// Vulnerability: 
    // application inserts the username into the database without any validation or sanitization
$username = $_POST['username'];
$email = $_POST['email'];
$passw = $_POST['pass'];

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

// SQL query to insert data into the 'users' table
$sql = "INSERT INTO users (username, email, password) VALUES('$username', '$email','$passw')";

// pass the connection and the query to execute
$result = mysqli_query($conn, $sql);

// after completing the process, page will navigate to the index.php (login) page
header("Location: index.php");