<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00FF00}
</style>
</head>
<body> 


<?php
$emailErr = "";
$email =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	
	  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid Email Format";
    }
  }
  
}

?>


<h2>E-mail</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

 E-mail:<br/> <input type="text" name="email" placeholder="Hint: sample@example.com">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>






</body>
</html>