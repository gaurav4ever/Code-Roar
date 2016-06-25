<!DOCTYPE html>
<html>
<head>
	<title>student database</title>
</head>
<body>
<center><h1>History table and Data Tables </h1></center>
<center><h4>System to show how to store histiry of data in data tables.</h4></center>
<center><h4>Frontend : HTML, CSS, JavaScript, JQuery</h4></center>
<center><h4>Backend : PHP, MySql, Xampp</h4></center>

	<?php
if(isset($_POST['add']))
{
	require 'connect.php';

if(! get_magic_quotes_gpc() )
{

   $name = addslashes($_POST['s1']);
   $surname =addslashes($_POST['s2']);
   $username=addslashes($_POST['s3']);
   $password=addslashes($_POST['s4']);
   $designation=addslashes($_POST['s5']);
   $location=addslashes($_POST['s6']);
}
else{
	$name = $_POST['s1'];
   $surname =$_POST['s2'];
   $username=$_POST['s3'];
   $password=$_POST['s4'];
   $designation=$_POST['s5'];
   $location=$_POST['s6'];	
}

//insert the input values into SQL
$sql = "INSERT INTO `user_info`(`Name`, `Surname`, `username`, `password`, `Designation`, `Location`) VALUES ('$name','$surname','$username','$password','$designation','$location');";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully<br>";
mysql_close($conn);
}
else
{
?>
		<form method="post" action="<?php $_PHP_SELF ?>">
	s		<table width="600" border="0" cellspacing="1" cellpadding="2">
				<tr>
				<td width="250">Name : </td>
				<td>
				<input name="s1" type="text" id="s1">
				</td>
				</tr>
				<tr>
				<td width="250">Surname : </td>
				<td>
				<input name="s2" type="text" id="s2">
				</td>
				</tr>
				<td width="250">username : </td>
				<td>
				<input name="s3" type="text" id="s3">
				</td>
				</tr>
				<tr>
				<td width="250">Password</td>
				<td>
				<input name="s4" type="text" id="s4">
				</td>
				</tr>
				<tr>
				<td width="250">Designation</td>
				<td>
				<input name="s5" type="text" id="s5">
				</td>
				</tr>
				<tr>
				<td width="250">Location</td>
				<td>
				<input name="s6" type="text" id="s6">
				</td>
				</tr>
				<tr>
				<td width="250"> </td>
				</tr>
				<tr>
				<td width="250"> </td>
				<td>
				<input name="add" type="submit" id="add" value="Add Tutorial">
				</td>
				</tr>
			</table>
		</form>
<?php
}
?>
<br>
<a href="update.php"><button>Update</button></a><br><br>
<a href="show.php"><button>Show</button></a><br><br>
</body>
</html>