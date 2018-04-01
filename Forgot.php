<!DOCTYPE html>
<html>
<head>
	<title>Forgot password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<style type="text/css">
		.cen{
			border: 1px solid black;
			margin: 16% 30% 16% 40%;
			height: 280px;
			width: 300px;
		}
		.cen .cen1 {
			text-align: center;
		}
		.cen2{
			font-size: 1.5em;
		}
		
	</style>
	<?php
	$question = "";
	if (isset($_POST['email'])){
		$email=$_POST['email'];
		$connection = mysqli_connect("localhost", "root", "","proj");
		$email = stripslashes($email);
		$email = mysqli_real_escape_string($connection,$email);
		$ses_sql=mysqli_query($connection,"select q from questions where email='$email'");
		$row = mysqli_fetch_assoc($ses_sql);
		$question =$row['q'];
	}
	?>
</head>
<body>
	<form>
		<div class="cen">
			<div class="cen1"><div class="cen2">Security question<hr></div><br><?php echo $question; ?></div><br>


			<center><input type="text" name="ans" placeholder="Enter the answer here!" <?php if($question == "") echo "disabled"?>></center><br>
			<center><button type="button" class="btn btn-primary">Submit</button></center>
		</div>
	</form>

</body>
</html>