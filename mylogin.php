<!DOCTYPE html>
<?php
include('login.php');
if(isset($_SESSION['login_user'])){
header("location: test.php");
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="cssmain/mainlogin.css">
	<title>Login</title>
</head>
<body>
<font face="Oswald">
<!--<div class="navbar-header"><a href=""><span class="head1">MaNoticeBoard</span></a><a href=""><span class="p1">page1</span></a><a href=""><span class="p2">page2</span></a><a href=""><span class="p2">page3</span></a><a href=""> <span class="p2">Page4</span></a></div>
<hr color="black">-->
<div class="topnav" id="myTopnav">
   <span>StudentSpace</span>
          <a href="contactus.html">Contact</a>
          <a href="aboutus.html">About</a>

  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<center>
<div class="bor">
<div class="mar container">
<h2 class="top" class="big">Log in</h2><br>
<form action="" method="POST">
<input type="text" name="email" required placeholder="Enter your email" class="big" width="80"><br><br>
<input type="password" name="pass" placeholder="Enter your password" class="big"><br><br>
<input type="submit" name="login" value="Login" class="btn-primary a btn-round">
<center><hr class="l" color="black"></center><font color="white">
</form>
<button class="btn-success" onclick="location.href='singup.php'">Create a new account</button></font><a href=""><div class="for">Forgot password?</div></a></div>
<span><?php echo $error; ?></span>
</div> 
</center>
</font>
</body>
</html>