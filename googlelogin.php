<?php
session_start();
if(isset($_SESSION['user'])){
	header('');
}
if(isset($_POST['login'])){
	if ($_POST['username'] == 'admin' and $_POST['password'] == 'admin'){
		$_SESSION['user'] = $_POST['username'];
		$_SESSION['message'] = 'Login Success!!!';
		header('Location:Registration.php');
	}else{
		echo 'Wrong Password!';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Final Project</title>
	<link rel="stylesheet" type="text/css" href="Rform.css">
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			overflow: auto;
			height: 90%; 
			max-height: 100%; 
			line-height: 1.5em;
			background-image: url(img/bg.jpg);
			background-size: cover;
			background-attachment: fixed;
			color: black;
		}
		.user input{
			height: 9%;
			width: 50%;	
			
		}
		.google img{
			width:20%;
			height: 70px;
		}
		.google a{
			margin-top: 3%;
		}

	</style>
	


	<div style="background-color: rgb(0,0,0,0.8);height: 1000px; margin: 0; padding: 0; overflow: hidden; max-height: 100%;">



		<div class="user">
		<form method="POST">
		<div style="background-color: white;background-size:cover;font-family: Arial; color: black;height: 400px; width: 25%;text-align: center; font-size: 20px; border: 2px solid white;float: center; margin-left: 35%; margin-top: 6%;">
		<div class="google">
		<a>Sign in to continue to Gmail</a>
		<br>
		<br>
		<img src="img/profile.png">
		<br>
		<br>
		<input type="text" name="username" placeholder="Email">
		<br>
		<br>
		<input type="password" name="password" placeholder="Password"></a>
		<br>
		<br>
		<a><input type="submit" name="login" style="background-color: blue;font-size: 20px;
	color: white; font-family:arial;" value="Sign in"></a>
		<br>
		<br>
		<a>or</a>
		
		 <h5>Stay signed in<i>   <a>  </a><a href="">Need help?</a></i>.</h5>
		 </div>
		</div>
		</form>
	
	</head>
	</html>
	<