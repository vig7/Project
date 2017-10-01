<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="cssmain/mainindex.css">

	<title>Welcome</title>
</head>
<body>
  
<font face="Indie Flower">
	<div class="topnav" id="myTopnav">
  <span class="no">StudentSpace</span>
  <div class="pull-right" style="float: right;"><a href=<?php if(isset($_SESSION['login_user']))echo "'logout.php'"; else echo "'mylogin.php'"?>><font color="white"><span class="glyphicon glyphicon-search"></span></font><?php if(isset($_SESSION['login_user']))echo "Sign Out"; else echo "Sign In"?></a></div>
    <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="#news">News</a>
  <a href="#home">Home</a>
  <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
</div>
<div class="row"> 
<div class="col-xl-6 mw1 col9"><center><div class="mp1">All events</div></center><hr color="black">
<div class="box9">
  <center><div class="smp">The Heading<div></center>
  <hr>
  <div class="ssm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet, lorem vestibulum pellentesque porta, urna augue ultrices sapien, eu semper elit ipsum sed nisl. Morbi congue suscipit lectus, sed viverra mauris tempus vitae. Morbi lacus nisi, vulputate porta mi et, ultrices placerat tellus. Morbi pharetra convallis purus nec egestas. Nam facilisis purus eu elit suscipit, sit amet malesuada libero consectetur. Curabitur odio urna, consequat ut orci nec, ultricies sodales risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae
</div><br>
<div class="row h5">
  <div class="col-xl-6" ><div class="a8"><div>Issued by-</div><div>Student Council</div></div></div>
  <div class="col-xl-6" align="right"><div class="a9"><div>Deadline</div><div>29/10/17</div></div></div>
</div>
</div>
<br>
<div class="box9">
  <center><div class="smp">The Heading<div></center>
  <hr>
  <div class="ssm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet, lorem vestibulum pellentesque porta, urna augue ultrices sapien, eu semper elit ipsum sed nisl. Morbi congue suscipit lectus, sed viverra mauris tempus vitae. Morbi lacus nisi, vulputate porta mi et, ultrices placerat tellus. Morbi pharetra convallis purus nec egestas. Nam facilisis purus eu elit suscipit, sit amet malesuada libero consectetur. Curabitur odio urna, consequat ut orci nec, ultricies sodales risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae
 </div><br>
 <div class="row h5">
  <div class="col-xl-6"><div class="a8"><div>Issued by-</div><div>Student Council</div></div></div>
  <div class="col-xl-6" align="right"><div class="a9"><div>Deadline</div><div>29/10/17</div></div></div>
 </div>




</div>
</div><div class="col-xl-6 col8"><center><div class="mp1">Commited</div></center><hr color="black">
<div class="box9">
  <center><div class="smp">The Heading<div></center>
  <hr>
  <div class="ssm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet, lorem vestibulum pellentesque porta, urna augue ultrices sapien, eu semper elit ipsum sed nisl. Morbi congue suscipit lectus, sed viverra mauris tempus vitae. Morbi lacus nisi, vulputate porta mi et, ultrices placerat tellus. Morbi pharetra convallis purus nec egestas. Nam facilisis purus eu elit suscipit, sit amet malesuada libero consectetur. Curabitur odio urna, consequat ut orci nec, ultricies sodales risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</div>
  <br>
<div class="row h5">
  <div class="col-xl-6"><div class="a8"><div>Issued by-</div><div>Student Council</div></div></div>
  <div class="col-xl-6" align="right"><div class="a9"><div>Deadline</div><div>29/10/17</div></div></div>
</div>
</div><br>
<div class="box9">
  <center><div class="smp">The Heading<div></center>
  <hr>
  <div class="ssm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet, lorem vestibulum pellentesque porta, urna augue ultrices sapien, eu semper elit ipsum sed nisl. Morbi congue suscipit lectus, sed viverra mauris tempus vitae. Morbi lacus nisi, vulputate porta mi et, ultrices placerat tellus. Morbi pharetra convallis purus nec egestas. Nam facilisis purus eu elit suscipit, sit amet malesuada libero consectetur. Curabitur odio urna, consequat ut orci nec, ultricies sodales risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae
</div><br>
<div class="row h5">
  <div class="col-xl-6"><div class="a8"><div>Issued by-</div><div>Student Council</div></div></div>
  <div class="col-xl-6" align="right"><div class="a9"><div>Deadline</div><div>29/10/17</div></div></div>
</div>
</div>
<br>
</div>
</div>
</body>
</html>