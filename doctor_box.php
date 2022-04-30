<?php

$conn = mysqli_connect('localhost','root','','web_project');

if(!$conn){
	echo("error connection:".mysqli_connect_error());
}
$query="select * from doctor";
$result=mysqli_query($conn,$query);
?>



<html>
<head>
<title>HOME PAGE</title>
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
<div class="section" id="sec1"> <a href="doctor_box.php">    DOCTOR  </a>  </div>
<div class="section" id="sec1"> <a href="hospital.php">    HOSPITAL </a>  </div>
<div class="section" id="sec1"> <a href="contectn.html">  CONTACT</a>  </div>
<div class="section" id="sec1"> <a href="aboutn.html">    ABOUT  </a>  </div>
<div class="section" id="sec1"> <a href="appointment_list.php">   Appointment_list  </a>  </div>
</div>

<div class="search_page">

<div class="doc"><a href="doctor_box.php"> 1</a> </div>
<div class="doc"> 2</div>
<div class="search_Dr">
<form action="search.php" method="post">
<input type="name" name="search_name" class="search_box" placeholder="Doctor search">
<input type="submit" name="submit" class="search_submit" value="search">
</form>
</div>
</div>


<?php
while($rows=mysqli_fetch_assoc($result))
	
{
?>

<div class="sour" >
<?php
 $id=$rows['id'];
 //echo $id;
 ?>
<div class="box"><a href="doctor_profile.php  ?id=<?php echo $id; ?>"> <img src=" <?php echo $rows['pic'];?>"><h2><?php echo $rows['name'];?></h2></a></div>


</div>


<?php

}
//else
	//echo 'not work';
?>


</header>
</body>
</html>