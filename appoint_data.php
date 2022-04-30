<?php
$name=$_POST['uname'];
$mobile=$_POST['umobile'];
$dr_name=$_POST['dr_name'];
$id=$_POST['dr_id'];
$conn = mysqli_connect('localhost','root','','web_project');
if(!$conn){
	echo("error connection:".mysqli_connect_error());
      }
else{
	echo(" process working:-");
	$sql="INSERT INTO appointment(patient_name,patient_mobile,dr_name,dr_id) VALUES ('$name','$mobile','$dr_name','$id')";
    }
?>
