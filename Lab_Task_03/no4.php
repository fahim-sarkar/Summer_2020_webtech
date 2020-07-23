<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00FF00}
</style>
</head>
<body> 


<?php
$dobErr =  "";
$dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	
	 if (empty($_POST["dob"])) {
    $dobErr = "Empty field not allowed";
  } else {
    $dob = test_input($_POST["dob"]);
  }
}
  
  



?>


<h2>Date Of Birth</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  
   <input type="date" name="dob" max="1900-01-01" min="2016-12-31"><br><br>
   
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>






</body>
</html>





