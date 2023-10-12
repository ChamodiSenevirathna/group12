<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            Home
        </title>
        <link rel="stylesheet" type="text/css" href="admin-dashboard.css">
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li style="color: white;">Hello, <?php echo $_SESSION['username']; ?></li>
                    <li><a href='#'>Dashboard</a></li>
                    <li><a href="admin-logout.php"> Logout </a></li>
                <ul>
            </nav>
        </header>
        <h1>Users</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>

            <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "test_db";

            // Create a database connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check if the connection was successful
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to retrieve data
            $sql = "SELECT id, username, email FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>"; // does not perform any validation or sanitization before displaying data
                    echo "<td>" . $row["email"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "No data found";
            }

            // Close the database connection
            $conn->close();
            ?>
        </table>

        <h1>Contact Us</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>

            <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "test_db";

            // Create a database connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check if the connection was successful
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to retrieve data
            $sql = "SELECT id, fname, subject, message FROM contact";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["fname"] . "</td>";
                    echo "<td>" . $row["subject"] . "</td>";
                    echo "<td>" . $row["message"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "No data found";
            }

            // Close the database connection
            $conn->close();
            ?>
        </table>

    </body>

    </html>

<?php
} else {
    header("Location: index.php");
    exit();
}
?>