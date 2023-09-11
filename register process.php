register_process php
<?php
// Connect to your database (replace these values with your database credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve values from the registration form
$name = $_POST['name'];
$age = $_POST['age'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert data into the database
$sql = "INSERT INTO users (name, age, username, password) VALUES ('$name', $age, '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Redirect to the login page after successful registration
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
