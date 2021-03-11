<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Final Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			overflow: hidden;
			height: 90%; 
			max-height: 100%;
			background-image: url(img/bg.jpg);
			background-size: cover;
			background-attachment: fixed;
			line-height: 1.5em;
			color: black;

		}

		main {

			text-decoration: none;
			position: fixed;
			top: 150px; 
			bottom: 50px; 
			left: 100px; 
			right: 0;
			overflow: auto;
		}
		

		.button button {
			margin-top: 1%;
			float: center;
			font-size: 30px;
			background-color: blue;
			border-radius: 200px;
			border-color: white;
		}
		.button a{
			color:white;
			font-family:fantasy;
		}

		.button button{
				transition: transform .2s ease;
		}
		.button button:hover{
			filter: grayscale(0%);
			transform: scale(1.1);

		}
		#g{
		
		font-size:45px;
		margin: 1.0%;
		font-family:Georgia;
		color:yellow;
		text-shadow: +3px 0 black;
		}
		#contact1 img{
			margin-top: 7%;
			margin-left: 2%;
			border-radius: 70%;
			float: left;
			width:3%;
			height: 40px;
		}
		#g img{
		margin-top: 1%;
		margin-left: 40%;
		width:20%;
		height: 300px;
		}

		
		</style>
		

	
	</head>
	<div style="background-color: rgb(0,0,0,0.8);height: 1000px; margin: 0; padding: 0; overflow: hidden; max-height: 100%;">
	<body>
	
		<div id="g"><img src="img/logo.png">
		<br>
		<br>
	
		<center>

			<b><a>Online Registration: </a></b>
			<br>
			<br>
			<b><a>New Mode of Learning System</a></b>
			<br>
			<b><a>_______________</a></b>
			</center>
			
			
		</div>
		<div class="button">
		<center>
			<button><b><a href ="googlelogin.php" style="text-decoration: none; ">Get Started!</a></b></button>
			</div>
		</center>
	
			<div id="contact1">
				
				<a><img src="img/fb.png"></a>
				<a><img src="img/email3.png"></a>
				<a><img src="img/tweeter.png"></a>
				<img src="img/ins.jpg">
		
		
		
			
		</div>


	

	</p>
	</div>
	</div>
	
</body>
</html>