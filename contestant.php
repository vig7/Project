<!DOCTYPE html>
<html>
<head>
	<title>Contestant list</title>
	<?php
	include('session.php');
	?>
</head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="cssmain/maincontestant.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/fonts/glyphicons-halflings-regular.woff">
<body>
  <font face="Oswald">
	   	<div class="topnav" id="myTopnav">
          <span class="no">StudentSpace</span>
           <a href=<?php if(isset($_SESSION['login_user']))echo "'logout.php'"; else echo "'mylogin.php'"?>><?php if(isset($_SESSION['login_user']))echo "Sign Out"; else echo "Sign In"?></a>
  <?php if(isset($_SESSION['login_user'])) echo "<font color='white'><a>Welcome, $login_session</a></font>";?>
          <a href="contactus.html">Contact</a>
          <a href="aboutus.html">About</a>

        </div>
       <div class="task">
	<?php $rid=$_POST['tid'];
	$p=mysqli_query($connection,"select title from task where tid='$rid'");
	$r=$p->fetch_assoc();
	$p=$r['title'];
	$q=mysqli_query($connection,"select name from users where uid in (select u_id from comit where t_id='$rid')");
	?>
          <div class="taskname"><center><?php echo $p;?></center></div><hr color="black">
          <ol>
		  <?php while($canlist = $q->fetch_assoc()){?>
          	<li><?php echo $canlist['name'];?></li>
		  <?php } ?>
          </ol>
        </div>
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