<?php
include("../database/db_connect.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        echo "<h3>Invalid Email or Password</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>User Login</h2>

<form method="POST">

<label>Email</label><br>
<input type="email" name="email" required><br><br>

<label>Password</label><br>
<input type="password" name="password" required><br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>