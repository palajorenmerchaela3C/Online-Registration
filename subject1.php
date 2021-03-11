<?php
session_start();
if(isset($_SESSION['user'])){
	header('');
}
if(isset($_POST['join'])){
	if ($_POST['password'] == 'bsit3C'){
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['message'] = 'Welcome!!!';
		header('Location:classes.php');
	}else{
		echo 'Wrong Password!';
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
			background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 86%);
			text-align: center;
			line-height: 10px;
			height: 90px;
			border-style: outset;
			width: 100%;
			background-color: white;
			color: black;
			font-size: 30px;
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
			height: 350px; 
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
		p{
			font-size: 15px;
			text-align: left;
			margin-left:2%;
			font-family: Georgia;
		}
		li {
			font-size: 15px;
			text-align: left;
			margin-left:5%;
			font-family: Georgia;
		}
		img{
			width: 7%;
			height: 8%;
			margin-right: 1%;
			float: right;	
		}
	</style>
	<script type="text/javascript">
		function myMessage(){
				alert("Posted!")

			}
		</script>

	<div style="background-color: rgb(0,0,0,0.8);height: 1000px; margin: 0; padding: 0; overflow: hidden; max-height: 100%;">
	

<body>
	<div id="welcome">
		<h3><a>Event Driven Programming</h3></a>

	</div>
<center>
	<form method="POST">
		<br>
	<a href=""><img src="img/clip1.png"></a>
	<input type="text" name="password" placeholder="Share with your class..." style="height: 10%; width: 80%;" ><br>
	<br>
	<a><input type="submit" name="post" style="background-color: blue;font-size: 20px;
	color: white; font-family:Georgia;" value="Post" onclick="myMessage()"></a>
			
	</center>
	</form>
</center>
</body>
</html>
