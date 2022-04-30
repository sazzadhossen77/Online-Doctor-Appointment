<?php
$conn = mysqli_connect('localhost','root','','web_project');
if(!$conn){
	echo("error connection:".mysqli_connect_error());
}
if(isset($_POST['submit'])){
	
$name=$_POST['uname'];
$password=$_POST['upassword'];

$sql="select * from register where name='$name' and password='$password'";
$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result) ==1){
	
	
	header("refresh:1; url=homepage.html");	
}
else{
	echo "name or phdrassword wrong";
}
} 	  




