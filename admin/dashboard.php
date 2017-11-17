<?php
session_start();
      
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
	<title>Admin Dashboard</title>
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
<h1 align="center" style="font-size: 30pt;font-family: courier;">Admin Dashboard</h1>
<hr style="background-color:blue;width: 50%;height: 5px;margin: auto;">
<div id="container">
<div id="right">
	<marquee behavior="alternate" style="font-size: 30pt;line-height: 300pt;">Select Option From Left Menu
</marquee></div>
<?php include("options.php");?>

	
</div>
</body>
</html>