

<!DOCTYPE html>
<html>
<head>
		<title>Welcome to Website
		</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

	
		<div id="website">

		<p align="center">Welcome to My Website </p>
		</div>

		<table border="2" cellpadding="2" width="100%">
		<div id="Profile">
	<form method="POST">
		<legend>
			------Registration-------
		</legend>
			<label>Name:</label>
			<input type="text" name="Fname" placeholder="Required" ><br>
			<label>Surname:</label>
			<input type="text" name="Sname"  placeholder="Required"><br>
			<label>Profession:</label>
				<select name="Profession">
			<option value="Student">Student</option>
			<option value="Teacher">Teacher</option>
			</select><br>
			<label>Gender:</label>
				<select name="Gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
				</select><br>
			<label>Birthday:</label>
			<input type="date" name="Birth_date" placeholder="Required"><br>
			<label>Gmail:</label>
			<input type="text" name="Gmail" placeholder="required" required><br>
		
			<label>Address:</label>
			<input type="text" name="Address" placeholder="Required"><br>
			
			<input type="submit" name="add_registration" 
			style="background-color: red;
			float: left;
			font-family: Gabriola;
			color: white;
			margin-left: 10%;
			margin-top:1%;
			border-radius: 2px; 
			font-size: 20px;
			background-color: red;
			border-color: white;" onclick="myMessage()" class="btn btn-success" value="Register as Student"/>
			<input type="submit" name="add_registration" 
			style="background-color: red;
			color: white; 
			float: left;
			font-family: Gabriola;
			margin-left: 20%;
			margin-top:1%;
			border-radius: 2px; 
			font-size: 20px;
			background-color: red;
			border-color: white;"
			onclick="myMessage()" class="btn btn-success" value="Register as Instructor"/>

	</form>
			<p>Profile</p>
			
			
		</div>
		<div id="Images">
		<a href="Images.html">
		<br>
		<br>
		<br>
		<br>
			<p>Images</p>
			<img src="img/profile3.jpg">
	<button><b><a href ="Registration.php" style="text-decoration: none;">Register Now!</b></a></button>

		</div>
		
		</body>
		</html>