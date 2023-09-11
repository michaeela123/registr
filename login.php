<?php
// Connect to your database (same code as in register_process.php)

// Retrieve values from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve the hashed password for the given username from the database
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Passwords match, redirect to the dashboard or notify the user
        header("Location: dashboard.php");
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Invalid username.";
}

$conn->close();
?>
