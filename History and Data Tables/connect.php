<?php 

	$mysql_host='localhost'; //your local server name
	$mysql_user='root';		 //your Xampp Admin Username
	$mysql_password='';		 //your Xampp Admin Password

	if((!@mysql_connect($mysql_host,$mysql_user,$mysql_password))){
		die("cannot connect to database");
	}
	else{
		if(@mysql_select_db("student")){   //your database name
			//echo "connection successfull<br><br>";
		}
		else{
			echo "connection unsuccessfull<br><br>";
		}
	}

 ?>