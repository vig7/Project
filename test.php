<!DOCTYPE html>
<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: mylogin.php");
}
?>
<html>
<head>
    <title>Studentspace</title>
</head>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="cssmain/mainadmin.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
 <font face="Indie Flower">
    <div class="topnav" id="myTopnav">
  <span class="no">StudentSpace</span>
  <div class="pull-right" style="float: right;"></div>
  <a href=<?php if(isset($_SESSION['login_user']))echo "'logout.php'"; else echo "'mylogin.php'"?>><?php if(isset($_SESSION['login_user']))echo "Sign Out"; else echo "Sign In"?></a>
  <?php if(isset($_SESSION['login_user'])) echo "<font color='white'><a>Welcome, $login_session</a></font>";?>
    <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="#news">News</a>
  <a href="#home">Home</a>
  <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://static.pexels.com/photos/12064/pexels-photo-12064.jpeg" alt="Los Angeles" style="width:; height: 550px">
      </div>

      <div class="item">
        <img src="https://static.pexels.com/photos/296878/pexels-photo-296878.jpeg" alt="Chicago" style="width:; height: 550px">
      </div>
    
      <div class="item">
        <img src="https://static.pexels.com/photos/297755/pexels-photo-297755.jpeg" alt="New york" style="width:; height: 550px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <ul class="nav nav-pills">
    <li class="active t1"><a data-toggle="pill" href="#home"><center>Active</center></a></li>
    <li><a data-toggle="pill" class="t2" href="#menu1"><center> <?php if($adm==0) echo 'Commited'; else echo 'Create task';?></center></a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <br>
      <div class="box9">
  <center><div class="smp">The Heading<div></center>
  <hr color="black">
  <div class="ssm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet, lorem vestibulum pellentesque porta, urna augue ultrices sapien, eu semper elit ipsum sed nisl. Morbi congue suscipit lectus, sed viverra mauris tempus vitae. Morbi lacus nisi, vulputate porta mi et, ultrices placerat tellus. Morbi pharetra convallis purus nec egestas. Nam facilisis purus eu elit suscipit, sit amet malesuada libero consectetur. Curabitur odio urna, consequat ut orci nec, ultricies sodales risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae
</div><br>
<div class="row h5">
  <div class="col-xl-6" ><div class="a8"><div>Issued by-</div><div>Student Council<br><br><div>Count 0/12</div></div></div></div>
  <div class="col-xl-6" align="right"><div class="a9"><div>Deadline</div><div>29/10/17<br><br><button class="btn-primary">Enroll</button></div></div></div>
</div>
</div>
<br>
    </div>
    <div id="menu1" class="tab-pane fade">
<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <br>
      <div class="box9">
  <?php if($adm==0){
	  echo('<center><div class="smp">The Heading<div></center>
  <hr>
  <div class="ssm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet, lorem vestibulum pellentesque porta, urna augue ultrices sapien, eu semper elit ipsum sed nisl. Morbi congue suscipit lectus, sed viverra mauris tempus vitae. Morbi lacus nisi, vulputate porta mi et, ultrices placerat tellus. Morbi pharetra convallis purus nec egestas. Nam facilisis purus eu elit suscipit, sit amet malesuada libero consectetur. Curabitur odio urna, consequat ut orci nec, ultricies sodales risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae
</div><br>
<div class="row h5">
  <div class="col-xl-6" ><div class="a8"><div>Issued by-</div><div>Student Council</div></div></div>
  <div class="col-xl-6" align="right"><div class="a9"><div>Deadline</div><div>29/10/17</div></div></div>');
  }
  else{
	  echo('<div class="admin1"><br>
      <span>Enter the heading:</span>
    
    <input type="text" name="heading" class="ad"><br><br>
    <span>Enter description:&nbsp;</span><input type="text" name="des" class="ad"><br><br>
    <span>Enter Quantity:&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="number" name="count" class="ad"><br><br>
    <span>Eneter Deadline:&nbsp;&nbsp;</span><input type="date" name="deadline"><br><br></div>
    <center><button class="btn-primary r1">Post</button></center>');
  }
  ?>
</div>
</div>
<br>
    </div>
  </div>

</body>
</html>