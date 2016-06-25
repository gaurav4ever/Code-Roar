<!DOCTYPE html>
<html>
<head>
	<title>show</title>

	<!-- include these files to use data tables -->
	<link rel="stylesheet" type="text/css" href="style/jquery.dataTables.min.css">
    <script src="js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
 	<script type="text/javascript">
       $(document).ready(function() {
  		  $('#example').DataTable();
		} );
	</script>
	
</head>
<body>
	<a href="index_student.php"><button>Back</button></a><br>
	 <form method="post" action="show.php">
	 	<input type="text" name="name" placeholder="enter name">
	 	<button type="submit" name="find">Search</button>
	 </form>
	 <?php 

		if (isset($_POST['find'])) {
			require 'connect.php';
			$name=$_POST['name'];
			$sql="SELECT * FROM `user_info` WHERE Name='$name'";
			$retval=mysql_query($sql);
			if(!$retval)die("Connection Error!");
			else{
				?>
				<table id="example" class="display" cellspacing="0" width="100%">
			<thead>
					<tr>
						<th>History</th>
						<th>Name</th>
						<th>Surname</th>
						<th>Username</th>
						<th>Designation</th>
						<th>Location</th>
					</tr>
				</tread>
				<tbody>
				<?php
				while($mquery=mysql_fetch_array($retval)){

					if($mquery['isHistory']==1){
						?>
						<tr>
							<td><?php echo $mquery['actionHappened'].' on '.$mquery['actionDate'] ?></td>
							<td><?php echo $mquery['Name'] ?></td>
							<td><?php echo $mquery['Surname'] ?></td>
							<td><?php echo $mquery['username'] ?></td>
							<td><?php echo $mquery['Designation'] ?></td>
							<td><?php echo $mquery['Location'] ?></td>
							</tr>
						<?php
					}
					else{ 
						?>
						<tr>
							<td><?php echo "Latest" ?></td>
							<td><?php echo $mquery['Name'] ?></td>
							<td><?php echo $mquery['Surname'] ?></td>
							<td><?php echo $mquery['username'] ?></td>
							<td><?php echo $mquery['Designation'] ?></td>
							<td><?php echo $mquery['Location'] ?></td>
							</tr>
						<?php
					}
				}
			}
		}
	 ?>
</body>
</html>
