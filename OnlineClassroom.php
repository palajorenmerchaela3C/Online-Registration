<!DOCTYPE html>
<html>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			font-family: Bell MT;
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
			font-family: Bell MT;
			line-height: 10px;
			height: 90px;
			border-style: outset;
			width: 100%;
			background-color: white;
			color: black;
			font-size: 50px;
		}
		#welcome p{
			text-align: center;
			line-height: 1px;

		}		
		h2{
			margin-left: 10px;
		}
		#choice button {
			margin-top: 1%;
			float: center;
			font-size: 15px;
			margin-top: 4%;
			margin-left: 45%;
			background-color: blue;
			border-radius: 2px;
			border-color: white;
		}
		#choice button{
				transition: transform .2s ease;
		}
		#choice button:hover{
			filter: grayscale(0%);
			transform: scale(1.1);

		}
		#choice a{
			color: white;
			font-size: 20px;
			font-family: Georgia;
		}
	</style>
<div style="background-color: rgb(0,0,0,0.8);height: 1000px; margin: 0; padding: 0; overflow: hidden; max-height: 100%;">
<body>

	<div id="welcome">
		<p>Online Classroom</p>
	</div>
	<div id="choice">
		<h2><p>it's your first time here?</p></h2>
		<button style="height: 50px; width: 150px; ;"><a href="student.php" style="text-decoration: none;">Join class</a></button>
		<br>
		<button style="height: 50px; width: 150px" ><a href="instructor.php" style="text-decoration: none;">Create class </a></button>
	</div>
</body>
</html>
