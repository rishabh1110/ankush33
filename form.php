<html>
	<head>
	</head>
	<body>
	<form method="post" action='uploadfile.php'  enctype="multipart/form-data">
	Name:<input type="name" name="fname" placeholder="Enter name"><br>
	Email:<input type="email" name="email" placeholder="Email"><br>
	Maths:<input type="checkbox" name="subject[]" value="maths"><br>
	Php:<input type="checkbox" name="subject[]" value="Php"><br>
	Html:<input type="checkbox" name="subject[]" value="Html"><br>
	File:<input type="file" name="resume"> 
	
	<button type="submit" name='sub'>Submit</button>
	</form>
	</body>
</html>

