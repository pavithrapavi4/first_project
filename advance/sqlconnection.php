<!DOCTYPE html>
<html>
<head>
    <title>Submit Data</title>
</head>
<body>
    <h2>Submit Data to Database</h2>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="place">Place:</label>
        <input type="text" name="place" id="place" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";  // Replace with your MySQL server address
        $username = "your_username";  // Replace with your MySQL username
        $password = "your_password";  // Replace with your MySQL password
        $database = "SS";

        // Create a connection to the MySQL server
        $conn = new mysqli($servername, $username, $password);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create the 'SS' database
        $sql = "CREATE DATABASE IF NOT EXISTS $database";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully<br>";
        } else {
            echo "Error creating database: " . $conn->error;
        }

        // Close the connection to the MySQL server
        $conn->close();

        // Reconnect to the MySQL server using the 'SS' database
        $conn = new mysqli($servername, $username, $password, $database);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create the 'school' table
        $sql = "CREATE TABLE IF NOT EXISTS school (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            place VARCHAR(255) NOT NULL
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table created successfully<br>";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        $name = $_POST["name"];
        $place = $_POST["place"];

        // Insert user inputs into the 'school' table
        $sql = "INSERT INTO school (name, place) VALUES ('$name', '$place')";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . $conn->error;
        }

        // Close the connection to the MySQL server
        $conn->close();
    }
    ?>
</body>
</html>