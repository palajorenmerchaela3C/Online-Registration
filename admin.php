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

if(isset($_POST['add_registration'])){

	$Fname = $_POST['Fname'];
	$Sname = $_POST['Sname'];
	$Profession = $_POST['Profession'];
	$Gender = $_POST['Gender'];
	$Birth_date = $_POST['Birth_date'];
	$Gmail = $_POST['Gmail'];
	$Address = $_POST['Address'];
	


	$sql = "insert into registration_record (First_name,Surname,Profession,Gender,Birth_date,Gmail,Address) values('.$Fname.','.$Sname.','.$Profession.','.$Gender.','.$Birth_date.','$Gmail.','$Address.');";

	$result = mysqli_query($conn,$sql);
	if($result){
		echo "";
	}else{
		echo "";
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
			float: center;
			width: 80%;	
			height: 500px;
			color: white;	
			border:inset;
			margin-left: 170px;
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
		.title{
			width: 100%;
		}
	</style>
<div style="background-color: rgb(0,0,0,0.8);height: 1000px; margin: 0; padding: 0; overflow: hidden; max-height: 100%;">
<body>
	<div id="ad">
		<h3><p>Admin panel</p></h3>
	</div>
	<div class="title">REGISTRATION RECORD</div>
		<table>
			<tr>
				
				<th>First_name</th>
				<th>Surname</th>
				<th>Profession</th>
				<th>Gender</th>
				<th>Birth_date</th>
				<th>Gmail</th>
				<th>Address</th>
			
			</tr>
			<?php
			$sql ="SELECT * from registration_record order by First_name DESC";
			$sql2 = "SELECT * FROM registration_record;";
			$result = mysqli_query($conn,$sql2);

			if(mysqli_num_rows($result) > 0){

				while ($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						
						<td><?php echo $row['First_name']; ?></td>
						<td><?php echo $row['Surname']; ?></td>
						<td><?php echo $row['Profession']; ?></td>
						<td><?php echo $row['Gender']; ?></td>
						<td><?php echo $row['Birth_date']; ?></td>
						<td><?php echo $row['Gmail']; ?></td>
						<td><?php echo $row['Address']; ?></td>
						
					
						
					</tr>
			</div>
			<?php } }else{
					echo "<tr> 
							<td colspan='6'>Empty!!! </td>


					</tr>";




				}?>	
		</table>



