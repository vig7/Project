<!DOCTYPE html>
<html>
<head>
    <title>Studentspace</title>
	<?php
include('session.php');
include('formpro.php');
if(!isset($_SESSION['login_user'])){
header("location: mylogin.php");
}
?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="cssmain/mainadmin.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  
<body>
 <font face="Oswald">
    <div class="topnav" id="myTopnav">
  <span class="no" id="top">StudentSpace</span>
  <div class="collapse navbar-collapse" id="myNavbar">
  <div class="pull-right" style="float: right;"></div>
  <a href=<?php if(isset($_SESSION['login_user']))echo "'logout.php'"; else echo "'mylogin.php'"?>><?php if(isset($_SESSION['login_user']))echo "Sign Out"; else echo "Sign In"?></a>
  <?php if(isset($_SESSION['login_user'])) echo "<font color='white'><a>Welcome, $login_session</a></font>";?>
    <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="#news">News</a>
  <a href="#home">Home</a>
  <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
</div></div>
<div class="row">
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
        <div class="thead">Creative commons</div>
        <div class="tside">Improve creative coordination by participation in collaborative tasks.</div>
      </div>

      <div class="item">
        <img src="https://static.pexels.com/photos/296878/pexels-photo-296878.jpeg" alt="Chicago" style="width:; height: 550px">
           <div class="thead">Skill share</div>
        <div class="tside">Contribute skills to analyse and solve real world problems for positive impact.</div>
      </div>
    
      <div class="item">
        <img src="https://static.pexels.com/photos/297755/pexels-photo-297755.jpeg" alt="New york" style="width:; height: 550px">
           <div class="thead">Credible experience</div>
        <div class="tside">Boost experience and add practical knowledge to improve your scope in the outside world.</div>
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
  </div></div>
  <br><br>
  <ul class="nav nav-pills">
    <li class="active t1"><a data-toggle="pill" href="#home"><center>Active</center></a></li>
    <li class="t2"><a data-toggle="pill" href="#menu1"><center> <?php if($adm==0) echo 'Commited'; else echo 'Create task';?></center></a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <br>
		<center><span><?php echo $formconf; ?></span></center>
		<?php if($adm==1)
			$active=mysqli_query($connection,"select * from task where deadline>(select curdate())");
					else
			$active=mysqli_query($connection,"select * from task where deadline>(select curdate()) and tid not in (select t_id from comit where u_id != '$uid'");	
					if ($active->num_rows > 0){
						while($list = $active->fetch_assoc()){?>
     <div class="box9">
  <center><div class="smp"><?php echo $list['title'];?></div></center>
  <hr color="black">
  <div class="ssm"><?php echo $list['description'];?> 
</div><br>
<div class="row h5">
  <div class="col-xl-6" ><div class="a8"><div>Issued by-</div><div><?php echo $list['issuer'];?><br><br><div>Needs <?php echo $list['quantity'];?> more </div></div></div></div>
  <div class="col-xl-6" align="right"><div class="a9"><div>Deadline</div><div><?php echo $list['deadline'];?> <br><br><form method="POST" ><input type="hidden" name="tid" value="<?php echo $list['tid'];?>"><input type="SUBMIT" name='<?php if($adm==0)echo "enroll"; else echo "viewlist" ?>' class="btn-primary" value='<?php if($adm==0)echo "Enroll"; else echo "Candidate List" ?>'></form></div></div></div>
</div>
</div>
<br>
					<?php }}
					?>

</div>
     <div id="menu1" class="tab-pane fade">
        <br>
      <div class="box9">

  <?php if($adm==0){?>
  <center><div class="smp">The Heading</div></center>
  <hr>
  <div class="ssm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet, lorem vestibulum pellentesque porta, urna augue ultrices sapien, eu semper elit ipsum sed nisl. Morbi congue suscipit lectus, sed viverra mauris tempus vitae. Morbi lacus nisi, vulputate porta mi et, ultrices placerat tellus. Morbi pharetra convallis purus nec egestas. Nam facilisis purus eu elit suscipit, sit amet malesuada libero consectetur. Curabitur odio urna, consequat ut orci nec, ultricies sodales risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae
</div><br>
<div class="row h5">
  <div class="col-xl-6" ><div class="a8"><div>Issued by-</div><div>Student Council</div></div></div>
  <div class="col-xl-6" align="right"><div class="a9"><div>Deadline</div><div>29/10/17</div></div></div></div>
  <?php
  }
  else{
	  ?>
	  <div class="admin1"><br>
      <form method="POST">
      <span>Enter the heading:</span>
    
    <input type="text" name="heading" class="ad"><br><br>
    <span>Enter description:&nbsp;</span><input type="text" name="des" class="ad"><br><br>
    <span>Enter Quantity:&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="number" name="count" class="ad"><br><br>
    <span>Enter Deadline:&nbsp;&nbsp;</span><input type="date" name="deadline"><br><br></div>
    <center><input type="submit" name="create" class="btn-primary r1" value="Post"></input></form></center>
	<?php
  }
  ?>
</div>
</div></div>
<br>
    
  <div class="btt"><a href="#top"><center>Back to top</center></div></a>
  <div class="downb">
  <div class="row">
    <div class="col-xl-6 col-sm-12 alink"><br><br>
      <a href="https://www.google.co.in/maps?q=sies+gst&um=1&ie=UTF-8&sa=X&ved=0ahUKEwj285rZ_YvXAhUB6Y8KHYOWA-EQ_AUIDCgD">
       <div class="downb1">
         <div>
          Sies Gst
       </div>    
       <div>
         Vidyapuram,Sector 5
       </div>  
       <div>
          Nerul, Navi Mumbai
       </div>
       <div>
         Maharashtra 400706
       </div></a>
    </div>
  </div>
    <div class="col-xl-6 downb2">
      <div class="col-xl-6 col-sm-10 downb2"><br><br>
      <div>Made by</div>
      <div>Students of</div>
      <div>Computer Department</div>
      <div>SIES GST</div>
    </div></div></div>
    <br><center><div class="downbl">&copy;Computer Department of SIES GST</div></center>
    </div>
  </div>
</div>
</font>
</body>
</html>