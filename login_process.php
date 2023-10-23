<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the MySQL database
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "registration";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the user exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            
             header("Location:http://localhost/zz/res/home.html");
            // echo "Login successful.";
        } else {
            echo "Login failed. Invalid password.";
        }
    } else {
        echo "Login failed. Invalid username.";
    }

    $stmt->close();
    $conn->close();
}
?>
