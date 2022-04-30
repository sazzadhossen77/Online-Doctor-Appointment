<?php
$name=$_POST['name'];
$location=$_POST['location'];
$mail=$_POST['mail'];
$mobile=$_POST['mobile'];
$pic=$_POST['pic'];

$conn = mysqli_connect('localhost','root','','web_project');

if(!$conn){
	echo("error connection:".mysqli_connect_error());
}
else{
	echo(" process working:-");
	

$sql="INSERT INTO hospital(name,location,email,mobile,pic) VALUES ('$name','$location','$mail','$mobile','$pic')";


	if(mysqli_query($conn,$sql))
{ echo 'welcome CTG Doctor';
//move_uploaded_file($_FILES['pic']['tmp_name'],"pcture/$pic");
	
} 
	  
	}	
header("refresh:2; url=admin_home.html");	

?>