<?php
$name=$_POST['uname'];
$mail=$_POST['umail'];
$mobile=$_POST['umobile'];
$password=$_POST['upassword'];

$conn = mysqli_connect('localhost','root','','web_project');

if(!$conn){
	echo("error connection:".mysqli_connect_error());
}
else{
	echo(" process working:-");
	

$sql="INSERT INTO register(name,email,mobile,password) VALUES ('$name','$mail','$mobile','$password')";


	if(!mysqli_query($conn,$sql))
{ echo 'welcome CTG Doctor';
	
} 
	  
	}	
header("refresh:2; url=homepage.html");	

?>