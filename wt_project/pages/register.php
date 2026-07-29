<?php
include("../database/db_connect.php");

if (isset($_POST['register'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(fullname, email, phone, password)
            VALUES ('$fullname', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Registration Successful</h3>";
    } else {
        echo "<h3>Error: " . $conn->error . "</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job Portal - Register</title>
</head>
<body>

<h1>Job Portal Registration</h1>

<form method="post" action="">

    <label>Full Name</label><br>
    <input type="text" name="fullname" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <label>Confirm Password</label><br>
    <input type="password" name="confirm_password" required><br><br>

    <input type="submit" name="register" value="Register">

</form>

<br>

<a href="login.php">Already have an account? Login</a>

</body>
</html>