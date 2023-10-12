<?php
// xss protection 
// Enables XSS filtering. Rather than sanitizing the page, the browser will prevent rendering of the page if an attack is detected.
header("X-XSS-Protection: 1; mode=block");

// contact us back-end process

// start the session
session_start();

// input data validation for contact us
$fname = $_POST['fname'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// validation function for input data
if(isset($_POST['fname']) && isset($_POST['subject']) && isset($_POST['message'])) {
    function validate($data){
        $data = trim($data); //removes whitespace or any other predefined character from both the left and right sides of a string
        $data = stripslashes($data); // removes backslashes
        $data = htmlspecialchars($data); // converts special characters into HTML entities
        return $data;
    }
}

// get the user entered data from contact form and validate them
$fname = validate($_POST['fname']);
$subject = validate($_POST['subject']);
$message = validate($_POST['message']);

// database parameters
$sname = "mysql_db"; // server name
$uname = "root"; // server username
$password = "root"; // server password
$db_name = "test_db"; // database name

// connection query
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// if there's a connection error with the database, display the error
if (mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_errno());
}

// sql query to insert data into the contact table
$sql = "INSERT INTO contact (fname, subject, message) VALUES('$fname', '$subject', '$message')";

// send the connection and query 
$result = mysqli_query($conn, $sql);

// once the process is finished redirect to the contact page
header("Location: contact.php");
