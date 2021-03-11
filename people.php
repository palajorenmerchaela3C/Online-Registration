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
			font-family: Gabriola;
			background-image: url(img/bg.jpg);
			background-size: cover;
			background-attachment: fixed;
			margin: 100px;
			float: center;
			width: 80%;	
			height: 500px;
			color: white;	
			border:inset;
		}
		#welcome{
			line-height: 10px;
			height: 90px;
			border-style: outset;
			width: 100%;
			background-color: white;
			color: black;
			font-size: 50px;
		}
		#welcome button{
			margin-top: 2%;
			margin-left: 10%;
			height: 40%;
			background-color:white;
			border-color: white;
			width: 12%;  

		}
		#teacher button{
			margin-top: 2%;
			margin-left: 75%;
			height: 20%;
			background-color:green;
			border-color: white;
			width: 10%;  

		}
		#student button{
			margin-top: 1%;
			margin-left: 45%;
			height: 20%;
			background-color:green;
			border-color: white;
			width: 10%;

		}
		#student a{
			
			text-align: center;

		}
		#student p{
			margin-left: 40%;
			font-size: 20px;
			font-family: Georgia;
			

		}
		button a{
			color: black; 
			font-family: Georgia;
			font-size: 25px;
		}
		button{
			transition: transform .2s ease;
		}
		button:hover{
		filter: grayscale(0%);
		transform: scale(1.1);

		}

		form {
			
			background-color: white;
			margin-top: 2%;
			margin-left: 40px;
			color: black;
			width: 400px;	
			text-align: center;
			height: 300px; 
			font-size: 35px;
			border:inset;
		}
		label{
			font-size: 30px;
			font-family: Georgia;
			text-align: left;

		}
		input:hover{
			filter: grayscale(0%);
			transform: scale(1.1);

		}
		img{
			margin-top: 2%;
			margin-left: 30%;
			height: 300px;
			width: 400px;
			border-radius: 5%;
		}
	</style>
	<div style="background-color: rgb(0,0,0,0.8);height: 1000px; margin: 0; padding: 0; overflow: hidden; max-height: 100%;">
	

<body>
	<div id="welcome">
<button><a href="room.php" style="text-decoration: none;">Stream</a>
<button><a href="createExam.php" style="text-decoration: none; float: center; margin-left: 20px;">Classwork</button></a>
<button><a href="people.php" style="text-decoration: none;">People</button></a>
<button><a href="" style="text-decoration: none;">Grades</button></a>

	</div>

<div id="teacher">
	<label style="text-align: left;">Teachers</label><button><a href="inviteTeacher.php" style="text-decoration: none; font-size: 25px; color: white;">Invite</a>
</div>
<br>
<hr>
<div id="student">
	<label style="text-align: left;">Students</label><br><br><br><br><br><br><hr>
	
	<p>Invite students to your class</p>
	<button><a href="inviteStudents.php" style="text-decoration: none; font-size: 25px; color: white;">Invite</a>
</div>
</body>
</html>
