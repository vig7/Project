<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['regis'])) {
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
$error = "Email is invalid";
}
elseif($_POST['pass']!=$_POST['passconf']){
	$error = "Make sure password matches confirmation";
}
else{
	// Define $email and $password
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","proj");
// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
$name = stripslashes($name);
$name = mysqli_real_escape_string($connection,$name);
$email = mysqli_real_escape_string($connection,$email);
$password = mysqli_real_escape_string($connection,$password);
$password=md5($password);
$query = "SELECT email FROM users where email='$email'";
$result = mysqli_query($connection,$query);
$numResults = mysqli_num_rows($result);
if($numResults>=1)
        {
            $error = "Account ".$email." already exists. Try <a href='mylogin.php'>signing in</a>";
        }
        else
        {
            mysqli_query($connection,"insert into users(email,name,password) values('$email','$name','$password')");
            $error = "Signup Sucessful. Redirecting to <a href='mylogin.php'>sign in</a> in 5 seconds.";
			header( "refresh:5; url=mylogin.php" );
        }
}
}
?>