<!DOCTYPE html>
<html>

<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <div class="box">
        <h1 style="text-align: center;">Login</h1>
         <!-- login form starts here -->
        <form action="login.php" method="post">
            <!-- if there's an error from backend it will display -->
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <!-- input field for username -->
            <div class="inputBox">
                <input type="text" name="username" autocomplete="off" required>
                <label>Username</label>
            </div>

            <!-- input field for password -->
            <div class="inputBox">
                <input type="password" name="password" autocomplete="off" required>
                <label>Password</label>
            </div>

            <!-- login button -->
            <input type="submit" name="login" value="Login">

            <!-- link to navigate to the user registration page -->
            <a href="register.php" target="_self">Sign Up</a>

        </form>
        <!-- login form ends here -->
    </div>

</body>

</html> 