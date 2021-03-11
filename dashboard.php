<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Online Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body {
			background-image: url(img/bg.jpg);
			background-size: cover;
			background-attachment: fixed;
			margin: 100px;
			margin-left: 170px;
			float: center;
			width: 80%;	
			height: 650px;
			color: white;	
			border:inset;
		}
		main {
			text-decoration: none;
			position: fixed;
			bottom: 50px;
			color: black;
			left: 100px; 
			right: 0;
			overflow: auto;
		}
		figure{
			float: left;
			width: 300px;
			height: 400px;
			text-align: center;
			margin: 1px;
		}
		img{
			background-size: fixed;
		}
		form{
			border-style: outset;
			height: 300px;
		}
		#dashboard{
			text-align: center;
			line-height: 10px;
			height: 90px;
			border-style: outset;
			width: 100%;
			background-color: white;
			color: black;
			font-size: 50px;
		}
		#footer {
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 50px;  
		}
		#category{
			font-size: 30px;
			margin-left: 240px;
			text-decoration: none;
			position: fixed;
			top: 270px;
		}
		#category1 {
			margin: 5px;
			line-height: 300px;
			width: 300px;
			border-radius: 30px;
		}
		#category1:hover{
			transition: 1s;
			transform: scale(1.1);
		
		}
		#category2 {
			margin: 5px;
			line-height: 300px;
			width: 300px;
			line-height: 300px;px;
			border-radius: 30px;
		}
		#category2:hover{
			transition: 1s;
			transform: scale(1.1);
		
		}
		#category3 {
			margin: 5px;
			line-height: 300px;
			width: 300px;
			border-radius: 30px;

		}
		#category3:hover{
			transition: 1s;
			transform: scale(1.1);
		
		}
		#category4 {
			margin: 5px;
			line-height: 300px;
			width: 300px;
			border-radius: 30px;
		}
		#category4:hover{
			transition: 1s;
			transform: scale(1.1);
		
		

		}
		#logout button {
			height: 60px;
			float: center;
			font-size: 30px;
			background-color: gray;
			border-color: white;
			margin-left: 35%;	
			border-style: inset;	
		}
		#logout a{
			color:white;
			font-family:fantasy;
			text-decoration: none;
		}

		button{
				transition: transform .2s ease;
		}
		#logout button:hover{
			text-shadow: 1, 0, black;
			filter: grayscale(0%);
			transform: scale(1.1);

		}
		
		</style>

		
	
	</head>
	<body>
		<div id="dashboard">
		<h3><p>Dashboard</p></h3>
		</div>

		<main id="category">
			<figure>
			<div id="category1">
			<form style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 86%);">
			<a href="admin.php"  style="text-decoration:none; " ><font color="#000000"><b><caption>Registration Record</caption></a>	
			</form>
				</div>
			</figure>
			<figure>
			<div id="category2">
			<form style="background-image: linear-gradient(to bottom, #00ffff 0%, #0066ff 100%);">
			<a href="classroom.php" style="text-decoration:none;"><font color="#000000"><caption>Classroom Created</caption></a>
			</form>
			</div>
			</figure>
			<figure>
			<div id="category3">
			<form style="background-image: linear-gradient(to bottom, #00ffff 15%, #ff0066 86%);">
			<a href="invitedStudents.php" style="text-decoration:none;"><font color="#000000"><caption>Students</caption></a>
			</form>
			</div>
			</figure>
			<figure>
			<div id="category4">
			<form style="background-image: linear-gradient(to bottom, #00ffff 23%, #ff0000 80%);
">
			<a href="invitedTeacher.php" style="text-decoration:none;"><font color="#000000"><caption>Teacher</caption></a>
			</form>
			</div>
			</figure>
			<div id="logout">
			<p><a href="start.php"><button style="text-decoration:none;">Logout</p></a></button>
		</div>

		</main>
		
</body>
</html>