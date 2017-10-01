<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: mylogin.php"); // Redirecting To Home Page
}
?>