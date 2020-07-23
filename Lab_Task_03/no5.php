<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00FF00}
</style>
</head>
<body> 


<?php
$digreeErr =  "";
$digree = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	
	 if (empty($_POST["digree"])) {
    $digreeErr = "Digree is required";
  } else {
    $digree = test_input($_POST["digree"]);
  }
}
  
  



?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Digree:<br/>
   <input type="checkbox" name="digree" value="SSC">
  <label for="vehicle1"> SSC</label>
  <input type="checkbox" name="digree" value="HSC">
  <label for="vehicle2"> HSC</label>
  <input type="checkbox" name="digree" value="BSc">
  <label for="vehicle3"> BSc</label>
  <span class="error">* <?php echo $digreeErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>






</body>
</html>