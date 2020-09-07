<?php

include "searchDb.php";

if (isset($_POST['search'])) {

   $name = $_POST['search'];

   $Query = "SELECT name FROM search WHERE name LIKE '%$name%' LIMIT 5";

   $ExecQuery = MySQLi_query($con, $Query);

   echo '
<ul>
   ';
   
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
  
   <li onclick='fill("<?php echo $Result['name']; ?>")'>
   <a>

       <?php echo $Result['name']; ?>
   </li></a>
   
}}
?>
