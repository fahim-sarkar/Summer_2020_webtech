<?php

session_start();

$con = mysqli_connect('localhost' , 'root' , '');

mysqli_select_db($con, 'miniproject' );

$id = $_POST['id'];
$pass = $_POST['pass'];


$s = "select * from mp1 where id = '$id' && pass = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['id'] = $id;
	header('location:adminHome.html');
	
}else{
	
	header('location:login.html');   
	echo "Invalid information....";
	
	
	
}


?>