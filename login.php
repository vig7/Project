<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login'])) {
if (empty($_POST['email']) || empty($_POST['pass'])) {
$error = "Email or Password is invalid";
}
else
{
// Define $email and $password
$email=$_POST['email'];
$password=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","proj");
// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($connection,$email);
$password = mysqli_real_escape_string($connection,$password);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from users where password='md5($password)' AND email='$email'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$email; // Initializing Session
header("location: index.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>