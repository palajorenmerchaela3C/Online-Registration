<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'project_3c';

$conn = mysqli_connect($hostname,$username,$password,$db_name);

if (!$conn){
	echo mysqli_connect_errno();
	echo mysqli_connect_err();
}

if(isset($_POST['add_classroom'])){

	$Cname = $_POST['Cname'];
	$Section = $_POST['Section'];
	$Subject = $_POST['Subject'];
	$Room = $_POST['Room'];

	$sql = "insert into Classroom (Cname,Section,Subject,Room) values('.$Cname.','.$Section.','.$Subject.','.$Room.');";

	$result = mysqli_query($conn,$sql);
	if($result){
		echo "";
	}else{
		echo "Failed!";
		echo mysqli_error($conn);
	}
}



?>

<!DOCTYPE html>
<html>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			background-image: url(img/bg.jpg);
			background-size: cover;
			background-attachment: fixed;
			margin: 100px;
			margin-left: 170px;
			float: center;
			width: 80%;	
			height: 500px;
			color: white;	
			border:inset;
		}
		#ad{
			text-align: center;
			line-height: 10px;
			height: 90px;
			border-style: outset;
			width: 100%;
			background-color: white;
			color: black;
			font-size: 40px;
		}
		.list{
			float: left;
			height: 600px;
			width: 20%;
			margin-left: 100px;
		}
		.list li{
			text-decoration: none;
			display: block;
		}
	</style>
<div style="background-color: rgb(0,0,0,0.8);height: 1000px; margin: 0; padding: 0; overflow: hidden; max-height: 100%;">
<body>
	<div id="ad">
		<h3><p>Admin panel</p></h3>
	</div>
	<div class="title">CLASSROOM CREATED</div>
	<center>
		<table>
			<tr>
				
				<th>Class name</th>
				<th>Section name</th>
				<th>Subject</th>
				<th>Room</th>
			
			
			</tr>
			<?php
			$sql ="SELECT * from classroom order by Cname DESC";
			$sql2 = "SELECT * FROM classroom;";
			$result = mysqli_query($conn,$sql2);

			if(mysqli_num_rows($result) > 0){

				while ($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						
						<td><?php echo $row['Cname']; ?></td>
						<td><?php echo $row['Section']; ?></td>
						<td><?php echo $row['Subject']; ?></td>
						<td><?php echo $row['Room']; ?></td>
					
						
					
						
					</tr>
			</div>
			<?php } }else{
					echo "<tr> 
							<td colspan='6'>Empty!!! </td>


					</tr>";




				}?>	
		</table>



