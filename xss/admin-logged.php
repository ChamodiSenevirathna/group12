<?php
// start the session
session_start();
// connect the database
include "db_conn.php";

// input data validation for login
if(isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

// get the user entered data from login form
$uname = validate($_POST['username']);
$password = validate($_POST['password']);

// sql query to select user entered data
$sql = "SELECT * FROM admin WHERE username = '$uname' AND password = '$password'";

// pass the connection and the query to execute
$result = mysqli_query($conn, $sql);

// if the user entered data is in the database
if(mysqli_num_rows($result) === 1){
    // get the result
    $row = mysqli_fetch_assoc($result);
    // set session data
    if($row['username'] === $uname && $row['password'] === $password){
        echo "Logged In";
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        header("Location: admin-dashboard.php");
        exit();
    }
    else{ // if the username or password is incorrect
        header("Location: admin-login.php?error=Incorrect username or password");
        exit();
    }
}
else{ // if there's no matching result in the database
    header("Location: admin-login.php");
    exit();
}