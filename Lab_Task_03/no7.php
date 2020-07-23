<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00FF00}
</style>
</head>
<body> 


<?php
$idErr = $fileErr = "";
$id = $file = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	
	 if (empty($_POST["id"])) {
    $idErr = "Valid ID is required";
  } else {
    $id = test_input($_POST["id"]);
  }
  
  
   if (empty($_POST["file"])) {
    $fileErr = "A file is required";
  } else {
    $file = test_input($_POST["file"]);
  }
  
}
  
  



?>


<h2>Profile Picture</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  User Id
  <form>
  <input type="number" id="quantity" name="id" min="0">
  <span class="error">* <?php echo $idErr;?></span>
  <br/><br/>
  Picture
  <input type="file" id="myFile" name="file">
   <span class="error">* <?php echo $fileErr;?></span>
   <br/><br/>
  
  <input type="submit" name="submit" value="Submit">  
</form>






</body>
</html>