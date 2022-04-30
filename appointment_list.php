<?php

$conn = mysqli_connect('localhost','root','','web_project');

if(!$conn){
	echo("error connection:".mysqli_connect_error());
}
$query="select * from patient";
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
<div class="section" id="sec1"> <a href="hospital.html">    HOSPITAL </a>  </div>
<div class="section" id="sec1"> <a href="contectn.html">  CONTACT</a>  </div>
<div class="section" id="sec1"> <a href="aboutn.html">    ABOUT  </a>  </div>
</div>
 
 <table border="1">
 <tr>
<th>Name</th>
<th>Modile</th>
</tr>
<?php
while($rows=mysqli_fetch_assoc($result))
	
{
 ?>

<tr>
<td><?php echo $rows['patient_name'];?></td>
<td> <?php echo $rows['patient_mobile'];?></td>

</tr>


<?php
/*<div><?php echo $rows['patient_name'];?>  <?php echo $rows['patient_mobile'];?></div>*/
}
//else
	//echo 'not work';
?></table>


 </body>
 </html>