<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<a href="index_student.php"><button>Back</button></a><br>
	<?php 
		if(isset($_POST['update'])){
			require 'connect.php';

			//fetching the values
			$name=$_POST['name'];
			$username=$_POST['username'];
			$designation=$_POST['designation'];
			$location=$_POST['location'];
			//fetching done

			//current date and time
			date_default_timezone_set("Asia/Kolkata");
			$action_date=date("Y-m-d h:i:sa");


			$sql="SELECT * FROM `user_info` WHERE Name='$name' AND isHistory=0";

			//make the old row's isHistory = 1 i.e., TRUE
			$sql_old="UPDATE `user_info` SET `isHistory`=1 , `actionHappened`='updated' , `actionDate`='$action_date' WHERE Name='$name' AND isHistory=0" ;

			$retval=mysql_query($sql);
			$retval_old=mysql_query($sql_old);

			if(!$retval && $retval_old)die("Connection Error");
			else{
				$mquery=mysql_fetch_array($retval);
				$new_surname=$mquery['Surname'];
				$new_pass=$mquery['password'];

				//create a new row with isHistory=0 i.e., FALSE
				$sql_new="INSERT INTO `user_info`(`Name`, `Surname`, `username`, `password`, `Designation`, `Location`) VALUES ('$name','$new_surname','$username','$new_pass','$designation','$location')";

				$retval_new=mysql_query($sql_new);
				
				if(!$retval_new)die("Connection Error");
				else{
					echo "<br>Done<br>";
				}
			}

		}
	?>
		<form method="post" action="update.php">
			Update on : <input type="text" name="name" placeholder="enter name"><br><br><br> 
			Username : <input type="text" name="username"><br><br>
			Designation : <input type="text" name="designation"><br><br>
			Location : <input type="text" name="location"><br><br>
			<button type="submit" name="update">Update</button>
		<form>
</body>
</html>