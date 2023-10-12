<!DOCTYPE html>
<html>

<head>
    <title>
        Register
    </title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <div class="box">
        <h1 style="text-align: center;">Sign Up</h1>
        <!-- start of the register form -->
        <form action="registered.php" method="post">

            <!-- input field for username -->
            <div class="inputBox">
                <input type="text" name="username" autocomplete="off" required>
                <label>Username</label>
            </div>
            <!-- input field for email  -->
            <div class="inputBox">
                <input type="text" name="email" autocomplete="off" required>
                <label>Email</label>
            </div>
            <!-- input field for password -->
            <div class="inputBox">
                <input type="password" name="pass" autocomplete="off" required>
                <label>Password</label>
            </div>

            <!-- sign up button -->
            <input type="submit" name="signup" value="Sign Up">

            <!-- to navigate to login page -->
            <a href="index.php" target="_self">Login</a>

        </form>
        <!-- end of the register form -->
    </div>
</body>

</html>