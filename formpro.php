<?php
$formconf = "";
if (isset($_POST['create'])) {
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$deadline = $_POST['deadline'];
$heading = $_POST['heading'];
$count = $_POST['count'];
$des = $_POST['des'];
// To protect MySQL injection for Security purpose
$heading = stripslashes($heading);
$des = stripslashes($des);
$des = mysqli_real_escape_string($connection,$des);
$heading = mysqli_real_escape_string($connection,$heading);

$connection = mysqli_connect("localhost", "root", "","proj");
if($query = mysqli_query($connection,"insert into task(title,description,deadline,quantity,issuer) values ('$heading','$des','$deadline','$count','$login_session')"))
	$formconf="Task ".$heading." added successfully";
else
	$formconf="Unknown error. Contact site admin";
}
?>