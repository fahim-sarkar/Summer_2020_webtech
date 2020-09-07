<?php

$con = MySQLi_connect(
   "localhost", "root", "", "miniproject" 
);


if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>