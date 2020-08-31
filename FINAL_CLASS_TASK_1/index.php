<!DOCTYPEE html>
<html>
<head>
<title> Demo Class</title>
</head>

<body>

<h1> Demo Class Task</h1>
 
 <form method="post" action="abc.php">
 <input type="text" id="name" name="name">
 <input type="button" id="submit" name="submit" value="submit" onclick="ajax()";
 </form>
 
 <script type="text/javascript">
 function ajax(){
 
 var name= document.getElementById('name').value;
 var xhttp = new XMLHttpRequest();
 xhttp.open('GET','abc.php',true);
 xhttp.send();
 }
 </script>
 </body>
 </html>