<!DOCTYPE html>
<html>
<head>
	<title>Insertion into database</title>
</head>
<body>

<?php 

	if(isset($_POST['add'])){
		$mysql_host='localhost';
		$mysql_user='root';
		$mysql_password='';

		$conn=mysql_connect($mysql_host,$mysql_user,$mysql_password);
		if((!$conn)){
			die('could not connect: '.mysql_error());
		}

		if(!get_magic_quotes_gpc() )
			{
				echo "hello<br>";
			    $ip=addslashes($_POST['s1']);
				$username=addslashes($_POST['s2']);
				$location=addslashes($_POST['s3']);
				$intercom=addslashes($_POST['s4']);
				$division=addslashes($_POST['s5']);
				$designation=addslashes($_POST['s6']);
				$antiVirus=addslashes($_POST['s7']);
				$mac=addslashes($_POST['s8']);
				$nonNiC=addslashes($_POST['s9']);
				$connectSwitch=addslashes($_POST['s10']);
				$issueDate=addslashes($_POST['s11']);
				$reasonForChangeIp=addslashes($_POST['s12']);
				$verfiyIP=addslashes($_POST['s13']);
				$oldUserDetail=addslashes($_POST['s14']);
			}
		else{
				$ip=$_POST['s1'];
				$username=$_POST['s2'];
				$location=$_POST['s3'];
				$intercom=$_POST['s4'];
				$division=$_POST['s5'];
				$designation=$_POST['s6'];
				$antiVirus=$_POST['s7'];
				$mac=$_POST['s8'];
				$nonNiC=$_POST['s9'];
				$connectSwitch=$_POST['s10'];
				$issueDate=$_POST['s11'];
				$reasonForChangeIp=$_POST['s12'];
				$verfiyIP=$_POST['s13'];
				$oldUserDetail=$_POST['s14'];
		}
		$ip=$_POST['s1'];
		$sql="INSERT INTO `NIC_worker_info` (`IP`, `username`, `location`, `intercom`, `division`, `designation`, `antivirus`, `MAC`, `Non NIC/ Coordinator`, `connected/ switch`, `issue date`, `reason for change Ip`, `verify Ip in NULL`, `Old user detail`) VALUES ('$ip','$username','$location','$intercom','$division','$designation','$antiVirus','$mac','$nonNiC','$connectSwitch','$issueDate','$reasonForChangeIp','$verfiyIP','$oldUserDetail')";

		mysql_select_db("nic database");
		$retval=mysql_query($sql,$conn);
		if(!$retval){
			die('could not enter data<br>'.mysql_error());
		}
		echo "Data Entered successfully<br>";
		mysql_close($conn);
	}
	else{
		?>
			
	<form method="post" action="<?php $_PHP_SELF ?>">
	<table width="600" border="0" cellspacing="1" cellpadding="2">
				<tr>
				<td width="250">IP : </td>
				<td>
				<input name="s1" type="text" id="s1">
				</td>
				</tr>
				<tr>
				<td width="250">Username : </td>
				<td>
				<input name="s2" type="text" id="s2">
				</td>
				</tr>
				<td width="250">Location : </td>
				<td>
				<input name="s3" type="text" id="s3">
				</td>
				</tr>
				<tr>
				<td width="250">Intercom</td>
				<td>
				<input name="s4" type="text" id="s4">
				</td>
				</tr>
				<tr>
				<td width="250">Division</td>
				<td>
				<input name="s5" type="text" id="s5">
				</td>
				</tr>
				<tr>
				<td width="250">Designation</td>
				<td>
				<input name="s6" type="text" id="s6">
				</td>
				</tr>
				<tr>
				<td width="250">AntiVirus</td>
				<td>
				<input name="s7" type="text" id="s7">
				</td>
				</tr>
				<tr>
				<td width="250">MAC</td>
				<td>
				<input name="s8" type="text" id="s8">
				</td>
				</tr><tr>
				<td width="250">Non NiC/ Coordinator</td>
				<td>
				<input name="s9" type="text" id="s9">
				</td>
				</tr><tr>
				<td width="250">Connected/ Switch</td>
				<td>
				<input name="s10" type="text" id="s10">
				</td>
				</tr>
				<tr>
				<td width="250">Issue Date</td>
				<td>
				<input name="s11" type="text" id="s11">
				</td>
				</tr>
				<tr>
				<td width="250">Reason for change IP</td>
				<td>
				<input name="s12" type="text" id="s12">
				</td>
				</tr>
				<tr>
				<td width="250">Verify Ip in NULL</td>
				<td>
				<input name="s13" type="text" id="s13">
				</td>
				</tr>
				<tr>
				<td width="250">Old User detail</td>
				<td>
				<input name="s14" type="text" id="s14">
				</td>
				</tr>
				<tr>
				<td width="250"> </td>
				<td>
				<input name="add" type="submit" id="add" value="Add">
				</td>
				</tr>
	</table>
	 </form>
	 <?php
	}

 	?>
</body>
</html>