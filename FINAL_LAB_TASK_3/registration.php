<?php

session_start();

$con = mysqli_connect('localhost' , 'root' , '');

mysqli_select_db($con, 'miniproject' );

$id = $_POST['id'];
$pass = $_POST['pass'];
$conP = $_POST['conP'];
$name = $_POST['name'];
$email = $_POST['email'];
$uType = $_POST['uType'];


$s = "select * from mp1 where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	
	echo"Username already taken, Try another.....";
	
}else{
	
	$reg = "insert into mp1 (id , pass , conP , name , email , uType) values ($id , $pass , $conP , '$name', '$email', '$uType')";
	mysqli_query($con, $reg);
	
	echo '<script language="javascript">';
echo 'alert("Values sent successfully")';
echo '</script>';
}


?>