<?php
session_start();
if(isset($_SESSION['user'])){
	header('');
}
if(isset($_POST['join'])){
	if ($_POST['password'] == '7a4812'){
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
			margin: 100px;
			font-family: Bell MT;
			background-image: url(img/bg.jpg);
			background-size: cover;
			background-attachment: fixed;
			margin-left: 170px;
			float: center;
			width: 80%;	
			height: 500px;
			color: white;	
			border:inset;
		}
		#welcome{
			line-height: 1px;
			height: 90px;
			border-style: outset;
			width: 100%;
			background-color: white;
			color: black;
			font-size: 50px;
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
	</style>
	<div style="background-color: rgb(0,0,0,0.8);height: 1000px; margin: 0; padding: 0; overflow: hidden; max-height: 100%;">
	<script type="text/javascript">
		function myMessage(){
				alert("Welcome!")

			}
		</script>

<body>
	<div id="welcome">
		<h3><center><a>Join Class</h3></center></a>

	</div>
<center>
	<form method="POST">
	<p>Ask your teacher for the class code, then enter it here.</p>
	<input type="text/number" name="password" placeholder="Class Code" style="height: 10%; width: 80%;" ><br>
	<b><p>To sign in with class code</p></b>
	<li>Use an authorized account</li>
	<li>Use a class code, with 6-7 letters and numbers, and no spaces or symbols</li>
	<li>If you are having trouble joining the class, go to the <i style="color: blue;">Help Center article</i></li>
	<br>
	<a><input type="submit" name="join" style="background-color: blue;font-size: 25px;
	color: white; font-family:Georgia;" value="Join"></a>
			
	</center>
	</form>
</center>
</body>
</html>
