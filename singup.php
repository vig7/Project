<!DOCTYPE html>
<?php
include('regis.php');
if(isset($_SESSION['login_user'])){
header("location: test.php");
}
?>
<html>
<head>
	<title>Sign up</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="cssmain/mainsignup.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/fonts/glyphicons-halflings-regular.woff">
</head>
<body>
    <font face="Oswald">
	   	<div class="topnav" id="myTopnav">
          <span class="no">StudentSpace</span>
          <a href="contactus.html">Contact</a>
          <a href="aboutus.html">About</a>
        </div>
        <div class="a1">
          <center>
        	<div class="a2">
        		Welcome to Student Space
        	</div>
          </center>
		  <form method="POST" action="">
          <hr color="black">
            <div class="mps">
            	Name
            </div>  
            <div class="mps">
             <button type="button" class="btn btn-default btn">
                <span class="glyphicon glyphicon-user">
                </span> 
             </button>
             <input type="text" name="name" placeholder=" Enter your Name" required class="inp">
            </div>
               <div class="mps">
            	Email
            </div>  
            <div class="mps">
             <button type="button" class="btn btn-default btn">
                <span class="glyphicon glyphicon-envelope">
                </span> 
             </button>
             <input type="text" name="email" required placeholder=" Enter your Email" class="inp">
            </div>
               <div class="mps">
            	Password
            </div>  
            <div class="mps">
             <button type="button" class="btn btn-default btn">
                <span class="glyphicon glyphicon-lock">
                </span> 
             </button>
             <input type="password" name="pass" required placeholder=" Enter Password" class="inp">
            </div>
               <div class="mps">
            	Confirm Password
            </div>  
            <div class="mps">
             <button type="button" class="btn btn-default btn">
                <span class="glyphicon glyphicon-lock">
                </span> 
             </button>
             <input type="password" name="passconf" required placeholder="Confirm Password" class="inp">
            </div>
               <div class="mps">
            	Year
            </div>  
            <div class="mps">
             <button type="button" class="btn btn-default btn">
                <span class="glyphicon glyphicon-calendar">
                </span> 
             </button>
             <select name="Year">
              <option value="FE">FE</option>
               <option value="SE">SE</option>
                <option value="TE">TE</option>
               <option value="BE">BE</option>
             </select>
            </div>
               <div class="mps">
            	Roll Number
            </div>  
            <div class="mps">
             <button type="button" class="btn btn-default btn">
                <span class="glyphicon glyphicon-user">
                </span> 
             </button>
             <input type="text" name="rollno" placeholder=" Enter your Roll number" class="inp">
            </div>
               <div class="mps">
            	Branch
            </div>  
            <div class="mps">
             <button type="button" class="btn btn-default btn">
                <span class="glyphicon glyphicon-education">
                </span> 
             </button>
             <input type="text" name="branch" placeholder=" Enter your Branch" class="inp">
            </div>
            <center>
                <input type="submit" name="regis" value="Register" class="btn btn-success btn-lg reg">
				</form>
				<br>
				<span><?php echo $error; ?></span>
				</center>
        </div>
</font>
</body>
</html>