<?php
// xss protection 
// Enables XSS filtering. Rather than sanitizing the page, the browser will prevent rendering of the page if an attack is detected.
header("X-XSS-Protection: 1; mode=block");

//  register back-end process

// start the session
session_start();

// get the user entered values for username, email and password from the register form
$username = $_POST['username'];
$email = $_POST['email'];
$passw = $_POST['pass'];

// validation function for input data
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass'])) {
    function validate($data){
        $data = trim($data); //removes whitespace or any other predefined character from both the left and right sides of a string
        $data = stripslashes($data); // removes backslashes
        $data = htmlspecialchars($data); // converts special characters into HTML entities
        return $data;
    }
}

// get the user entered data from login form
$username = validate($_POST['username']);
$email = validate($_POST['email']);
$passw = validate($_POST['pass']);

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