<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="register_process.php" method="POST">
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
