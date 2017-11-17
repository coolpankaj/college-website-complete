<?php
session_start();
//echo $k=$_GET["f"];
if(isset($_SESSION["ssid"]))
	{
	echo "Welcome:".$_SESSION["ssid"]."<a href='admin_logout.php'>Logout</a>";
	$adm_id=$_SESSION["ssid"];
	}
	else
 	{
	echo "<script>alert('You must login first ....');</script>";
	echo "<script>window.location.href='index.php' </script>";
 	}


if(isset($_GET["submit"]))
{
$pass=$_GET["old"];
$confirm=$_GET["confirm"];

$con=mysqli_connect("localhost","root","","project");
$q="select * from admin where admin_id='$adm_id' ";
$qry=$con->query($q);
if($qry->num_rows>0)
{
$q2="update admin set pass='$confirm' where  admin_id='$adm_id'  ";
$qry2=$con->query($q2);
	if($qry2==TRUE)
	{	
	echo "<script>alert('Password Updated Successfully......redirected to login page. ');</script>";
	echo "<script>window.location.href='index.php'</script> ";
	}
	else
	{
	echo "<script>alert('Error....');</script>";
	}

}
else
{
echo "<script>alert('Old password does not match........');</script>";
//echo "error".mysqli_error($con);

}


      
	
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>reset admin password..</title>
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

<script type="text/javascript">
		function validate()
			{
 
var p1=document.form.old.value;
var p2=document.form.new.value;
var p3=document.form.confirm.value;
if(document.form.old.value == "")
	{
		alert("please enter old password");
		document.form.old.focus();
		return false;
	}

	else if(document.form.new.value == "")
	{
		alert("please enter new password");
		document.form.new.focus;
		return false;
	}
	else if(document.form.confirm.value == "")
	{
		alert("please enter confirm password");
		document.form.confirm.focus;
		return false;
	}
else if(p2 != p3)
	{
		alert("The second  password do not match");
		return false;
	}
}
	</script>
</head>

<body style="background-image: url(../images/bg.jpg);">

<hr style="background-color:blue;width: 99%;height: 5px;">
<div id="container">
<div id="right">
<form method="get" name="form" onsubmit="return validate();" >
	<table align="center" width="50%" border="1px solid blue" style="margin-top: 150px;margin-left: 150px;">
		<caption style="text-transform: capitalize;font-size: 30px;font-weight: bold;font-family: courier;">Reset Form</caption>
		<tr>
			<th style="font-size: 20px;" align="left">Old Password:</th><td><input type="Password" name="old" ></td>
		</tr>
		<tr>
			<th style="font-size: 20px;" align="left">New Password:</th><td><input type="Password" name="new" ></td>
		</tr>
		<tr>
			<th style="font-size: 20px;" align="left">Confirm Password:</th><td><input type="Password" name="confirm" ></td>
		</tr>
				
				<tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;"></td></tr>
				</table>
				</form>
			</div>
					<?php include("options.php");?>

			</div>

</body>
</html>
