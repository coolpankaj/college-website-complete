<?php 
error_reporting(4);
session_start();
	/*if(isset($_SESSION["phpssid"]))
{
	echo "Welcome:".$_SESSION["phpssid"]."<a href='logout.php'>Logout</a>";
	echo '<audio src="extra/music.mp3" loop="infinite" autoplay></audio>';
}
else{
	echo "Welcome Guest!!!";
}*/


if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$gender=$_POST["gen"];
	$mobile=$_POST["mob"];
	$message=$_POST["msg"];

$con=mysqli_connect("localhost","root","","contact");
$q="insert into enquiry values ('','$name','$gender','$mobile','$message')";
$qry=$con->query($q);
if($qry==TRUE)
{
	echo "<script>alert('Message Sent Successfully......');</script>";
}
else {
	echo "<script>alert('Something Went Wrong.....');";
}

}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact-Us</title>
	 <link rel="icon" href="images/logo1.png" type="image/png" sizes="16x16">
	
	<link rel="stylesheet" type="text/css" href="css/contact1.css">
</head>
<body style="background-image:url(images/back1.jpg);background-attachment: fixed;" >
<?php include("header.php");?>


<div id="add">
	<h1 align="center" style="letter-spacing: 15px;"><font face="courier">ADDRESS</font></h1>
	<hr>
	<img src="images/add.jpg" height="350" width="930">
	<h2>Address: Pehowa Road, Kurukshetra, Haryana 136119</h2>
	<h2>Phone: 01741 283 841</h2>
</div>
<div id="enquiry" >
	<h1 align="center" style="letter-spacing: 5px;color: purple;background-color:#db4dff;"><font face="courier" >Enquiry-Form</font></h1>
	<hr>
	<form method="post" >
		<table width="100%" bgcolor="lightblue" height="auto" align="center">
			<tr>
				<th align="left">NAME:</th><td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th align="left">GENDER:</th><td><input type="radio" name="gen" value="male">MALE&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gen" value="female">FEMALE</td>
			</tr>
			<tr>
				<th align="left">MOBILE:</th><td><input type="text" name="mob"></td>
			</tr>
			<tr>
				<th align="left">Email:</th><td><input type="text" name="mail"></td>
			</tr>
			<tr>
				<th align="left" valign="top">MESSAGE:</th><td><textarea cols="40" rows="10" name="msg"></textarea></td>
			</tr>
			<tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="reset" name="reset" value="reset" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;"></td>
			</tr>
			
		</table>
	</form>
</div>
<?php include("footer.php"); ?>
<!--h1 align="center" style="background-color: black;color: white;border-radius: 10px;width: 100%;">Copyright &copy 2017</h1>-->
</body>
</html>

