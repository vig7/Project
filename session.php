<?php
$connection = mysqli_connect("localhost", "root", "","proj");
$adm=0;
session_start();// Starting Session
// Storing Session
if(isset($_SESSION['login_user']))
{
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select * from users where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['name'];
$uid =$row['uid'];
$adm=$row['adm'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection // Redirecting To Home Page
}
}
?>