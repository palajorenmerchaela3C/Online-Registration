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
	

	$sql = "insert into registration_record(First_name,Surname,Profession,Gender,Birth_date,Gmail,Address) values('.$Fname.','.$Sname.','.$Profession.','.$Gender.','.$Birth_date.','$Gmail.','$Address.');";

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
	<style type="text/css">
		body{
		
			background-image: url(img/bg.jpg);
			background-size: cover;
			background-attachment: fixed;
			width: 500px;
			height: 100%;	
		
		}
		form:hover{
			background-color: black;
			background-size: cover;
			color: white;
		}
		form{
			font-family: Georgia;
			background-color: white;	
			margin-top: 5%;
			color: black;
			width: 600px;	
			text-align: left;
			height: 700px; 
			font-size: 25px;
			border:inset;
		}
	form img{
		margin-left:200%;
	}
	label{
		margin-left:10%;
	}
	input{
		margin-left:2%;
		height: 4%;
		width: 50%;
	}
	select{
		margin-left:2%;
		height: 3%;
	}
	legend{
		font-family: Georgia;
		font-size: 35px;
		text-align: center;
	}
	button{
			transition: transform .2s ease;
		}
	button:hover{
		filter: grayscale(0%);
		transform: scale(1.1);

		}
	.Next{
		background-color: white;
		height: 100px;
		width: 600px;	
	}
	h2{
		margin-left: 60px;
	}
	</style>
	<div style="background-color: rgb(0,0,0,0.8);height: 1000px; width:2000px; overflow: hidden; max-height: 100%;">

	<script type="text/javascript">
		function myMessage(){
				alert("Registered Succesfully!")

			}
		</script>

<body>
		<center>

	<form method="POST">
		<legend>
			Register
		</legend>
		<br>
			<label>Name:</label><input type="text" name="Fname" placeholder="Required" ><br><br>
			<label>Surname:</label><input type="text" name="Sname"  placeholder="Required"><br><br>
			<label>Profession:</label><select name="Profession">
			<option value="Student">Student</option>
			<option value="Teacher">Teacher</option>
			</select><br><br>
			<label>Gender:</label><select name="Gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
				</select><br><br>
			<label>Birthday:</label><input type="text" name="Birth_date" placeholder="Required"><br><br>
			<label>Gmail:</label><input type="text" name="Gmail" placeholder="required" required><br><br>
		
			<label>Address:</label><input type="text" name="Address" placeholder="Required"><br><br>
			<br>
			<h2><input  type="submit" name="add_registration" 
			style="background-color: red;
			float: left;
			font-family: Georgia;
			color: white;
			margin-left: 20%;
			margin-top:1%;
			border-radius: 2px; 
			font-size: 20px;
			background-color: blue;
			border-color: white;"   onclick="myMessage()" class="btn btn-success" value="Register as Student"/></h2>
			<h2><input type="submit" name="add_registration" 
			style="background-color: red;
			color: white; 
			float: left;
			font-family: Georgia;
			margin-left: 20%;
			margin-top:1%;
			border-radius: 2px; 
			font-size: 20px;
			background-color: blue;
			border-color: white;" onclick="myMessage()"
			 class="btn btn-success" value="Register as Instructor"/></h2>

			
	</form>
	<br>
	<div class="Next">
		<button style="

			color: white; 
			float: left;
			font-family: Georgia;
			margin-left: 35%;
			margin-top:5%;
			font-size: 20px;
			background-color:green;
			border-color: white;
			width: 30%;">
			<a href="OnlineClassroom.php" style="text-decoration: none; color: white; font-size: 20px;">Next</a></button>

	</div>
		
		</center>
	</div>
</body>
</html>
