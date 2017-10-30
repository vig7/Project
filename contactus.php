<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="cssmain/maincontact.css">
<?php
	$msg="";
?>
<?php
	if (isset($_POST['submit']))
	{
		if (!empty($_POST['mail']) || !empty($_POST['name']))
		{

			

$connection = mysqli_connect("localhost", "root", "","proj");
			

$name = $_POST['name'];
			$mail = $_POST['mail'];
			$issue = $_POST['issue'];
			

$name = stripslashes($name);
			
$mail = stripslashes($mail);
			

$issue = stripslashes($issue);
			

$name = mysqli_real_escape_string($connection,$_POST['name']);


			$mail = mysqli_real_escape_string($connection,$_POST['mail']);


			$issue = mysqli_real_escape_string($connection,$_POST['issue']);


			if($query = mysqli_query($connection," INSERT INTO contactus (name, mail, issue) VALUES ('$name', '$mail', '$issue')"))
				
$msg=" Successful";

			else
				
$msg="Unknown error";
		}
	}
?>
</head>
<body>
	<font face="Oswald">
	   	<div class="topnav" id="myTopnav">
          <span class="no">StudentSpace</span>
          <a href="contactus.html">Contact</a>
          <a href="aboutus.html">About</a>
          <a href="test.php">Home</a>
        </div>
	<form method = "POST">
 	<div class="mp1">
              <center>
        		<div class="he1">
        			Contact us at StudentSpace
        		</div>
        		<hr color="black">
        	  </center>
        	<div class="he2">
        		 <div class="ml">Name</div>
        		<button type="button" class="btn btn-default btn">
                 <span class="glyphicon glyphicon-user">
                 </span> 
                </button>
                <input type="text" name="name" placeholder=" Enter your Name" class="inp">
                 <div class="ml">Email</div>
        		<button type="button" class="btn btn-default btn">
                 <span class="glyphicon glyphicon-user">
                 </span> 
                </button>
                <input type="text" name="mail" placeholder=" Enter the E-mail" class="inp">
                 <div class="ml">Issue</div>
        		<!--<button type="button" class="btn btn-default btn">
                 <span class="glyphicon glyphicon-list-alt">
                 </span> 
                </button>-->
                 <textarea name="issue" cols="40" rows="5" class="in1" placeholder=" Enter the issue"></textarea>
             </div>
                 <center>
                  <input value="Submit" name="submit" type="submit" class="btn btn-success btn-lg reg">
                </center>
		</form>
        	</div>
        </div>
</form>
		<span><?php echo $msg; ?></span>
</body>
</html>