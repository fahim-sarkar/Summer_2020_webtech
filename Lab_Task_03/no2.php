<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST['sname'];

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
	<b>Email:</b><br>
	<input type="text" name="sname" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Use two Letters at least" value=""><br> <p></p>
<input type="submit" name="" value="submit">
</form>
</body>
</html>