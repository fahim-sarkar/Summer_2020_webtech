<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $genderErr = $dobErr = $bloodGroupErr = $digreeErr = $idErr = $fileErr =  "";
$name = $email = $gender = $dob = $bloodGroup = $digree = $id = $file = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["bloodGroup"])) {
    $digreeErr = "Blood Group is required";
  } else {
    $bloodGroup = test_input($_POST["bloodGroup"]);
  }
  
   if (empty($_POST["digree"])) {
    $digreeErr = "Digree is required";
  } else {
    $digree = test_input($_POST["digree"]);
  }
  
  if (empty($_POST["file"])) {
    $fileErr = "A file is required";
  } else {
    $file = test_input($_POST["file"]);
  }
  
  if (empty($_POST["dob"])) {
    $dobErr = "Empty field not allowed";
  } else {
    $dob = test_input($_POST["dob"]);
  }
  
}


?>



<form>

<table border="1px solid black">
	<tr> 
	
	<td colspan="3"> <h1> PERSON PROFILE </h1></td>
	
	</tr>
	
	<tr>
	
	<td> Name </td>
	<td> <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span> </td>
	<td width="50px">  </td>
	
	</tr>
	
	<tr>
	
	<td> Email </td>
	<td> <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span> </td>
	<td>  </td>
	
	</tr>
	
	
	<tr>
	
	<td> Gender </td>
	<td> <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span></td>
	<td>  </td>
	
	</tr>
	
	<tr>
	
	<td> Date of birth </td>
	<td>  <input type="date" name="dob" max="1900-01-01" min="2016-12-31"><br><br>
   
  <span class="error">* <?php echo $dobErr;?></span> </td>
	
		<td>  </td>


	</tr>
	
	
	<tr>
	
	<td> Blood Group </td>
	<td> 

     <select name="bloodGroup">
    <option name="bloodGroup" value="bloodGroup1">A+</option>
    <option name="bloodGroup" value="bloodGroup2">A-</option>
    <option name="bloodGroup"  value="bloodGroup3">AB+</option>
    <option name="bloodGroup" value="bloodGroup4">AB-</option>
	<option name="bloodGroup" value="bloodGroup5">O+</option>
	<option name="bloodGroup" value="bloodGroup6">O-</option>
  </select>
  
  <span class="error">* <?php echo $bloodGroupErr;?></span>

	</td>
	<td>  </td>
	
	</tr>
	
	
	
	<tr>
	
	<td> Digree </td>
	<td> <input type="checkbox" name="digree" value="SSC">
  <label for="vehicle1"> SSC</label>
  <input type="checkbox" name="digree" value="HSC">
  <label for="vehicle2"> HSC</label>
  <input type="checkbox" name="digree" value="BSc">
  <label for="vehicle3"> BSc</label>
  <span class="error">* <?php echo $digreeErr;?></span> </td>
	<td>  </td>
	
	</tr>
	
	
	<tr>
	
	<td> Photo </td>
	<td> User ID <input type="number" id="quantity" name="id" min="0">
  <span class="error">* <?php echo $idErr;?></span>
  <br/><br/>
  Picture
  <input type="file" id="myFile" name="file">
   <span class="error">* <?php echo $fileErr;?></span> </td>
	<td>  </td>
	
	</tr>
	
	<tr>
	
	<td colspan="3">  </td>
	
	</tr>
	
	
	<tr>
	
	<td colspan="3"> <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"> </td>
	
	</tr>
	
	
	</table>

</form>

</body>
</html>