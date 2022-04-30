<html>
<head>
<title>Appointment_page</title>
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

<div class="section" id="sec1"> <a href="homepage.html">HOME  </a>  </div>
<div class="section" id="sec1"> <a href="doctor_box.php">    DOCTOR  </a>  </div>
<div class="section" id="sec1"> <a href="hospital.html">    HOSPITAL </a>  </div>
<div class="section" id="sec1"> <a href="contectn.html">  CONTACT</a>  </div>
<div class="section" id="sec1"> <a href="aboutn.html">    ABOUT  </a>  </div>
<div class="section" id="sec1"> <a href="appointment_list.php">   Appointment_list  </a>  </div>
</div>

<?php
$id=$_GET['id'];
//echo $id;
$name=$_GET['name'];
//echo  $name;
?>
<h1><?php echo  $name; ?>  Appointments</h1>
<div>
<form action="app_collect.php ?id=<?php echo $id; ?> && name=<?php echo $name;?>" method="post">
<p>Your name</p>
<input type ="text" name="uname"placeholder="Enter  name">
<p>Mobile Number</p>
<input type ="number" name="umobile"placeholder="Enter mobile number">

<br>
<br>
<input type ="submit" name="" value="Submit">
</form>
</div>

</header></body></html>