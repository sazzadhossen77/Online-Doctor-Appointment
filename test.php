<?php
$name=$_POST['uname'];
$lname=$_POST['lname'];
mysqli_connect('localhost','root','','web_project');
"INSERT INTO hh(jj,kk) VALUES ('$name','$lname');"	
?>



