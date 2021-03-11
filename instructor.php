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
			margin-left: 170px;
			float: center;
			width: 80%;	
			height: 500px;
			color: white;	
			border:inset;
		}
		#welcome{
			text-align: center;
			line-height: 10px;
			height: 90px;
			border-style: outset;
			width: 100%;
			background-color: white;
			color: black;
			font-size: 40px;
		}
		#welcome button{
			
			float: right;
			margin-right:2%;
			height: 20%;
			background-color:green;
			border-color: white;
			width: 10%;  

		}
		button a{
			color: white; 
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
			font-family: Gabriola;

		}
		input:hover{
			filter: grayscale(0%);
			transform: scale(1.1);

		}
	</style>
	<div style="background-color: rgb(0,0,0,0.8);height: 1000px; margin: 0; padding: 0; overflow: hidden; max-height: 100%;">
	<script type="text/javascript">
		function myMessage(){
				alert("Classroom Created Succesfully!")

			}
		</script>

<body>
	<div id="welcome">
		<h3><p>Create Classroom<button><a href="room.php" style="text-decoration: none;">Next</button></p></h3></a>

	</div>
<center>
	<form method="POST">
	<label>Class name:</label>
	<input type="text" name="Cname" placeholder="Required" ><br>
	<label>Section name:</label>
	<input type="text" name="Section"  placeholder="Required"><br>
	<label>Subject:</label>
	<input name="Subject" placeholder="Required"></br>
	<label>Room:</label>
	<input name="Room" placeholder="Required"></br>
	<input  type="submit" name="add_classroom" 
			style="margin-top: 1%;
			float: center;
			font-size: 15px;
			margin-top: 4%;
			margin-left: 0%;
			background-color: blue;
			border-radius: 2px;
			border-color: white;
			color: white;
			font-family: Georgia;
			font-size: 20px;
			width: 35%;" onclick="myMessage()"
			class="btn btn-success" value="Create" />
	</center>
	</form>
</center>
</body>
</html>
