<?php
$connection = mysqli_connect("localhost", "root", "","proj");
session_start();// Starting Session
// Storing Session
if(isset($_SESSION['login_user']))
{
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select name from users where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['name'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection // Redirecting To Home Page
}
}
?>