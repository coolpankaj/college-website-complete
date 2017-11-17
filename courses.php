 <?php
error_reporting(4);   
session_start();
 /*  
if(isset($_SESSION["phpssid"]))
{
	echo "Welcome:".$_SESSION["phpssid"]."<a href='logout.php'>Logout</a>";
	echo '<audio src="extra/music.mp3" loop="infinite" autoplay></audio>';
}
else {
	echo "Welcome Guest!!!!....";
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>KITM Courses</title>
	 <link rel="icon" href="images/logo1.png" type="image/png" sizes="16x16">

	<link rel="stylesheet" type="text/css" href="css/courses.css">
	

</head>
<body style="background-image:url(images/courses.jpg);background-attachment: fixed;" >

<?php include("header.php");?>
<hr style="background-color:blue;width: 99%;height: 5px;">
<div id="container">
<h1 align="Center" style="font-style: courier;text-transform: capitalize;word-spacing: 10px">Courses Offered at KITM Kurukshetra </h1>
<hr style="width: 80%">
<h3 align="Center">Various Courses offered at KITM Kurukshetra, under Kurukshetra University </h3>
<div id="middle">
	
	<div class="box">
		<img src="images/btech.jpg" height="80" width="80" style="margin-left: 90px;margin-top: 50px"><br><br>
		<ul>
			<li style="font-weight: bold;">Computer Sci. & Engg.</li><br>
			<li style="font-weight: bold;">Electronics & Comm. Engg.</li><br>
			<li style="font-weight: bold;">Mechanical Engg.</li><br>
			<li style="font-weight: bold;">Electrical Engg.</li>
		</ul>
	</div>
	<div class="box">
		<img src="images/mtech.png" height="80" width="80" style="margin-left: 90px;margin-top: 50px"><br><br>
		<ul>
			<li style="font-weight: bold;">Computer Sci. & Engg.</li><br>
			<li style="font-weight: bold;">Electronics & Comm. Engg.</li><br>
		</ul>
	</div>
	<div class="box">
		<img src="images/bba.jpg" height="80" width="80" style="margin-left: 90px;margin-top: 50px"><br><br>
		<ul>
			<li style="font-weight: bold;">Bachelor of Business Administration</li><br>
		</ul>
	</div>
	<div class="box">
		<img src="images/mba.jpg" height="80" width="80" style="margin-left: 90px;margin-top: 50px"><br><br>
		<ul>
			<li style="font-weight: bold;">Masters in Business Administration</li><br>
		</ul>
	</div>
		
	
</div>

</div>
<h1 align="center" style="background-color: black;color: white;border-radius: 10px;">Copyright &copy 2017</h1>

</body>
</html>