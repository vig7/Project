<html>
<table>
<form name="form1" method="POST" action="welcome.php">
<tr>
<td>Id:</td>
<td><input type="text" size="14" name="t1"><br><br></td>
</tr>
<td><button type="submit" value="getdetails"><b>Get Details</b></button></td>
</tr>
</form>
</table>
//conn.php
<?php
$servername = "localhost";
$username = "root";
$password = "";

 //Create connection
$conn = new mysqli($servername, $username, $password);
 //Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

 //Create database
/*$sql = "CREATE DATABASE DB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}*/
 //sql to create table
/*$sql = "CREATE TABLE T (
id INT(8), 
name VARCHAR(10)
)";*/

$dbname="DB";
$conn = new mysqli($servername,$username,$password,$dbname);
/*if ($conn->query($sql) === TRUE) 
{
    echo "Table T created successfully";
} 
else
{
    echo "Error creating table: " . $conn->error;
}*/
?>
</body>
</html>
//welcome.php
<?php
include "conn.php";
$a=$_POST['t1'];
//$b=$_POST['t2'];
/*$sql = "INSERT INTO T (id,name) VALUES ('$a','$b')";
if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

$sql="SELECT id,name FROM T where id='$a'";

if ($result=mysqli_query($conn,$sql))
  {
  if(mysqli_num_rows($result)>0)
  {
	  echo "<table><tr><th>id</th><th>name</th></tr></table>";
	 
  while($row=mysqli_fetch_array($result))
	{
		echo "<table>";
	  echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td></tr>";
		  echo "</table>";

	  }
  }
  else 
  {
	  "No results";
  }
  }
?>
