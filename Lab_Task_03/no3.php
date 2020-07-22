<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST['gender'];

	if($name == "")
	{
		echo "Cannot be empty";
	}
	
}



?>




<!DOCTYPE html>
<html>
<head>
	<title> Email Form</title>
</head>
<body>

<form method="POST">
	<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br>
<input type="submit" name="" value="submit">
</form>
</body>
</html>