<?php
error_reporting(4);
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$mobile=$_POST["mob"];
	$email=$_POST["mail"];
	$rev=$_POST["rvw"];
	$con=mysqli_connect("localhost","root","","project");
	$q="insert into review values ('','$name','$mobile','$email','$rev') ";
	$qry=$con->query($q);
	if($qry==TRUE)
{
	echo "<script>alert('Review Sent Successfully......');</script>";
}
else {
	echo "<script>alert('Something Went Wrong.....');";
}

}
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
	<title>Contact-Us</title>
	 <link rel="icon" href="images/logo1.png" type="image/png" sizes="16x16">
	<style type="text/css">
		#container{
			height: auto;
			width: 100%;
			/*border: 2px solid red;*/

		}
		#middle{
			height:300px;
			width: 100%;
			margin: 0px;
			/*border: 2px solid green;*/		}

	</style>
</head>
<body style="background-image:url(images/courses.jpg);background-attachment: fixed;" >
<div id="container">
<?php include("header.php");?>
<hr style="background-color:blue;width: 99%;height: 5px;">
<div id="middle">

	<form method="post" >
	<h2 align="center" style="font-family: sans-serif;text-transform: capitalize;word-spacing: 30px;letter-spacing: 5px;">Place Your Reviews Here...</h2>
		<table  align="center" width="80%" bgcolor="lightgrey" style="margin: auto;"  >
			<tr>
				<th align="center">NAME:</th><td><input type="text" name="name" required></td>
			
			
			
				<th align="center">MOBILE:</th><td><input type="text" name="mob"  required></td>
				</tr>
			
				<tr>
				<th align="center">EMAIL:</th><td><input type="text" name="mail"  required></td>
			
			

		
				<th align="center">REVIEWS:</th><td><textarea cols="40" rows="10" name="rvw"  required></textarea></td>
			</tr>
			<tr><td colspan="2" ><input  type="reset" name="reset" value="Reset" style="background-color: #4CAF50;border-radius: 10px;
    color: white;padding: 7px 10px 7px 10px;margin: 8px 0;border: none;cursor: pointer;width: 48%;font-size: 25px;">&nbsp&nbsp&nbsp
			<input type="submit" name="submit" value="Submit" style="background-color: #4CAF50;
    color: white;padding: 7px 10px 7px 10px;margin: 8px 0;border: none;cursor: pointer;width: 48%;font-size: 25px;border-radius: 10px;"></td>
			</tr>
			
		</table>
		<!--</fieldset>-->
	</form>
</div>
<?php include("footer.php"); ?>

</div>
</body>
</html>
