<?php
$name=$_POST['name'];
$degree=$_POST['degree'];
$mail=$_POST['mail'];
$time=$_POST['appointment'];
$mobile=$_POST['mobile'];
$pic=$_POST['pic'];
//$pic= addslashes(file_get_contents($_FILES['pic']['tmp_name']));
$conn = mysqli_connect('localhost','root','','web_project');

if(!$conn){
	echo("error connection:".mysqli_connect_error());
}
else{
	echo(" process working:-");
	

$sql="INSERT INTO doctor(name,degree,time,email,mobile,pic) VALUES ('$name','$degree','$time','$mail','$mobile','$pic')";


	if(mysqli_query($conn,$sql))
{ echo 'welcome CTG Doctor';
//move_uploaded_file($_FILES['pic']['tmp_name'],"pcture/$pic");
	
} 
	  
	}	
header("refresh:2; url=admin_home.html");	

?>