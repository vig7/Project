<?php
include('login.php');
if(isset($_SESSION['login_user'])){
header("location: index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="cssmain/mainlogin.css">
	<title>Login</title>

</head>
<body>
<font face="Indie Flower">
<div class="topnav" id="myTopnav">
   <a href="#">StudentSpace</a>
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<center>
<div class="bor">
<div class="mar container">
<h2 class="top" class="big">Log in</h2><br>
<form action="" method="POST">
<input type="text" name="email" required placeholder="Enter your email" class="big" width="80"><br><br>
<input type="text" name="pass" placeholder="Enter your password" class="big"><br><br>
<input type="submit" name="login" value="Login" class="btn-primary a btn-round">
<center><hr class="l" color="black"></center><font color="white">
<button class="btn-success" type="submit">Create a new account</button></font><a href=""><div class="for">Forgot password?</div></a></div>
</form>
<span><?php echo $error; ?></span>
</div> 
</center>
</font>
</body>
</html>