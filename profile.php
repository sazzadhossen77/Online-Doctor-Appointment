
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
<div class="section" id="sec1"> <a href="doctor.html">    DOCTOR  </a>  </div>
<div class="section" id="sec1"> <a href="hospital.html">    HOSPITAL </a>  </div>
<div class="section" id="sec1"> <a href="contectn.html">  CONTACT</a>  </div>
<div class="section" id="sec1"> <a href="aboutn.html">    ABOUT  </a>  </div>
</div>





<?php
$conn = mysqli_connect('localhost','root','','web_project');
if(!$conn){
	echo("error connection:".mysqli_connect_error());
}
if(isset($_POST['submit'])){
	
$name=$_POST['name'];


$sql="select * from register where name='$name'";
$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result) ==1){
	
	<header "home.html">
}
else{
	echo "name or phdrassword wrong";
}
} 







</header>
</body>