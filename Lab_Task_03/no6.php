<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00FF00}
</style>
</head>
<body> 


<?php
$bloodGroupErr =  "";
$bloodGroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	
	 if (empty($_POST["bloodGroup"])) {
    $digreeErr = "Blood Group is required";
  } else {
    $bloodGroup = test_input($_POST["bloodGroup"]);
  }
}
  
  



?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Blood Group:<br/>
  <select name="bloodGroup">
    <option name="bloodGroup" value="bloodGroup1">A+</option>
    <option name="bloodGroup" value="bloodGroup2">A-</option>
    <option name="bloodGroup"  value="bloodGroup3">AB+</option>
    <option name="bloodGroup" value="bloodGroup4">AB-</option>
	<option name="bloodGroup" value="bloodGroup5">O+</option>
	<option name="bloodGroup" value="bloodGroup6">O-</option>
  </select>
  
  <span class="error">* <?php echo $bloodGroupErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>






</body>
</html>