<?php
session_start();
if(isset($_POST["submit"]))
{

$image=$_FILES["pic"]["name"];
move_uploaded_file($_FILES["pic"]["tmp_name"],"banner/".$image);
$con=mysqli_connect("localhost","root","","project");
$q="insert into banner values ('','$image')";
$qry=$con->query($q);

if($qry==TRUE)
{
	echo "<script>alert('Record Added Successfully......');</script>";
}
else {
	echo "<script>alert('ERROR...');</script>";
}}
?>
<?php


 
if(isset($_SESSION["ssid"]))
{
  echo "Welcome:".$_SESSION["ssid"]."<a href='admin_logout.php'>Logout</a>";
}
else {
	echo "<script>alert('You must login first ....');</script>";
	echo "<script>window.location.href='index.php' </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Photos </title>
	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	#container{
		width: 100%;
		height: auto;
	/*	border: 2px solid orange;*/
}
#right{
			width: 68%;
			height: 350pt;
		/*border: 2px solid red;*/
			float: right;
      overflow: hidden;

			}

	</style>
</head>
<body style="background-image: url(../images/bg.jpg);">
<div id="container">

<h1 align="center" style="font-size: 30pt;font-family: courier;">Admin Dashboard</h1>
<hr style="background-color:blue;width: 99%;height: 5px;">

<div id="right">
<form method="post" enctype="multipart/form-data">
<table width="50%" border="2px solid orange" align="center" style="margin-top: 150px;margin-left: 20px;">
	<tr>
		<th align="center">Select photo to add:</th><td><input type="file" name="pic"></td>
	</tr>

	<tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="reset" name="reset" value="reset" style="text-transform: uppercase;color:white;background-color:#8A2BE2;font-size:15px;"></td>
			</tr></table></form>
	</div>
<?php include("options.php");?>

</div>
</body>
</html>
