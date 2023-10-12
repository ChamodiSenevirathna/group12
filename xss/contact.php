<?php
session_start(); // start the session

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            Contact Us
        </title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="contact.css">
    </head>

    <body>
        <header>
            <div class="header-banner">
                <h1>Visit Sri Lanka</h1>
            </div>
            <div class="clear"></div>
            <nav>
                <ul>
                    <li style="color: white;">Hello, <?php echo $_SESSION['username']; ?></li>
                    <li><a href='home.php'>Home</a></li>
                    <li><a href='contact.php'>Contact</a></li>
                    <li><a href="logout.php"> Logout </a></li>
                    <ul>
            </nav>
        </header>

        <!-- contact us form starts here -->
        <div class="container">
            <form id="contact" action="contact-process.php" method="post">
                <h3>Contact Us</h3>
                <!-- input for full name -->
                <fieldset>
                    <input placeholder="Your name"  name="fname" type="text" tabindex="1">
                </fieldset>
                <!-- input for subject -->
                <fieldset>
                    <input placeholder="Subject" name="subject" type="text" tabindex="2">
                </fieldset>
                <!-- input for message -->
                <fieldset>
                    <textarea placeholder="Type your message here...." name="message" tabindex="5"></textarea>
                </fieldset>
                <!-- submit button -->
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
        </div>
        <!-- contact us form ends here -->
    </body>

    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>