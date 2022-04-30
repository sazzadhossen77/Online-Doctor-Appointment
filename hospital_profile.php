<?php

$conn = mysqli_connect('localhost','root','','web_project');

if(!$conn){
	echo("error connection:".mysqli_connect_error());
}
$query="select * from hospital";
$result=mysqli_query($conn,$query);
?>



<html>
<head>
<title>Hospital profile</title>
<link rel="stylesheet" type="text/css" href="style.css"  />
</head>

<body>
<header>

<div class="logo_name">



<ul>
<li >  <h3><a href="home.html">Logout</a> </h3></li>

</ul>

<figure>
<img src="logopic.png">
</figure>

</div>





<div class="option">

<div class="section" id="sec1"> <a href="homepage.html">HOME   </a>  </div>
<div class="section" id="sec1"> <a href="doctor.html">    DOCTOR  </a>  </div>
<div class="section" id="sec1"> <a href="hospital.html">    HOSPITAL </a>  </div>
<div class="section" id="sec1"> <a href="contectn.html">  CONTACT</a>  </div>
<div class="section" id="sec1"> <a href="aboutn.html">    ABOUT </a>  </div>
<div class="section" id="sec1"> <a href="appointment_list.php">   Appointment_list  </a>  </div>
</div>


       <h1>Hospital Profile</h1> 
       
 
<div>
<?php 
$id=$_GET['id'];
 
$query="select * from hospital where id='$id'";
$result=mysqli_query($conn,$query);




if(mysqli_num_rows($result) ==1){
	
	while($rows=mysqli_fetch_assoc($result))
	{
		?>
<img src="<?php echo $rows['pic'];?>">

<div><h1> Name:  <?php echo $rows['name'];?></h1></div>
<div><h3>Location: <?php echo $rows['location'];?></h3></div>
<div><h3>Email:  <?php echo $rows['email'];?></h3></div>
<div><h3>Mobile: <?php echo $rows['mobile'];?></h3> </div>

<?php
$name=$rows['name'];
}
		
 ?>
 
<div>
<br>
<h1>Booking please call</h1>   
	
<?php	
}
else{
	echo "name or phdrassword wrong";
}  ?>

</div>
</header>
</body>
</html>