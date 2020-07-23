<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00FF00}
</style>
</head>
<body> 


<?php
$genderErr =  "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	
	 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
  
  



?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Gender:<br/>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>






</body>
</html>