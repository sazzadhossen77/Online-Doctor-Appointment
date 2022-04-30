<?php

echo "hello";

$id=$_GET['id'];
echo $id;
$name=$_GET['name'];
echo  $name;



$pname=$_POST['uname'];
$mobile=$_POST['umobile'];


$conn = mysqli_connect('localhost','root','','web_project');

if(!$conn){
	echo("error connection:".mysqli_connect_error());
}
else{
	echo(" process working:-");
	

$sql="INSERT INTO patient(patient_name,patient_mobile,dr_name,dr_id) VALUES ('$pname','$mobile','$name','$id')";


	if(!mysqli_query($conn,$sql))
{ echo 'welcome CTG Doctor';
	
} 
	  
	}	
header("refresh:2; url=doctor_box.php");
?>