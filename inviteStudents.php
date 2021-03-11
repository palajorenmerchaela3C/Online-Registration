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


if(isset($_POST['add_students'])){

	$name = $_POST['name'];


	$sql = "insert into students (name) values('.$name.');";

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
		form input{
		margin-top: 10%;
		margin-left:2%;
		height: 40px;
		width: 70%;
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
			margin-left: 2%;

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
	<script type="text/javascript">
		function myMessage(){
				alert("Success!")

			}
		</script>
	

<body>
	<div id="welcome">
<button><a href="room.php" style="text-decoration: none;">Stream</a>
<button><a href="createExam.php" style="text-decoration: none; float: center; margin-left: 20px;">Classwork</button></a>
<button><a href="people.php" style="text-decoration: none;">People</button></a>
<button><a href="" style="text-decoration: none;">Grades</button></a>

	</div>

<div id="teacher">
	<label style="text-align: left;">Invite Students</label>
</div>
<br>

<form method="POST">
<input type="text" name="name" placeholder="Name or email">
<br>
<input type="submit" name="add_students" 
			style="background-color: red;
			color: white; 
			float: left;
			width: 110px;
			font-family: Georgia;
			margin-left: 35%;
			margin-top:20%;
			border-radius: 2px; 
			font-size: 15px;
			background-color: blue;
			border-color: white;" onclick="myMessage()"
			 class="btn btn-success" value="Invite Students"/>
	</form>
</body>
</html>
s