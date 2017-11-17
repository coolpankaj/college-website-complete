<!-- Page does not in use .......   -->
<?php
session_start();
if(isset($_POST["submit"]))
{
	$adminid=$_POST["user"];
	$con=mysqli_connect("localhost","root","","project");
	$q="select * from admin where admin_id='$adminid' ";
	$qry=$con->query($q);
	if($qry->num_rows>0)
	{
		header("location:reset.php?f=$adminid");

	}
else{
	echo "<script>alert('Invalid Admin-Id...');</script>";
}

}
      
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
	<title>admin change password</title>
	<style type="text/css">
		*{
		margin: 0px;
		padding: 0px;
	}
	#container{
		width: 100%;
		height: auto;
		/*border: 2px solid orange;*/
	}
		#right{
			width: 69%;
			height: 350pt;
			/*border: 2px solid red;*/
			float: right;
			
}
	</style>
</head>
<body style="background-image: url(../images/bg.jpg);">
<div id="container">
<h1 align="center" style="font-size: 30pt;font-family: courier;">Admin Page</h1>
<hr style="background-color:blue;width: 99%;height: 5px;">

<div id="right">
<form method="post" >
	<table align="center" width="30%" border="1px solid blue" style="margin-top: 150px;">
	<tr>
		<th>Enter Admin id:</th><td><input type="text" name="user"></td>
	</tr>
	
	<tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;"></td></tr>
	</table>
</form>
</div>

<?php include("options.php");?>
</div>
</body>
</html>