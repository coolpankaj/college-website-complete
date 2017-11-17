<?php 
error_reporting(4);
if(isset($_POST["submit"]))
{
	$email=$_POST["user"];
	//echo "<script>alert('Your are redirected to reset page......');</script>";
	 //include("config.php"); 
	$con=mysqli_connect("localhost","root","","project");
	$q="select * from register where email='$email' ";
	$qry=$con->query($q);
	if($qry->num_rows>0)
	{
		header("location:reset.php?c=$email");
		
	
}
else{
	echo "<script>alert('Email does not exist...');</script>";
}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>forgot password page..</title>
	<script type="text/javascript">
		function validation()
		{
			var letters = /^[A-Za-z]+$/;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

if(document.f.user.value == "")
	{
		alert("please enter email id");
		document.f.user.focus();
		return false;
	}
else if(!(document.f.user.value.match(mailformat)))  
	{  
		alert("You have entered an invalid email address!");  
		document.f.user.focus();  
		return false; 
	}
	}
	</script>
</head>
<body style="background-color: lightblue;">
<?php include("header.php"); ?>
<hr style="background-color:blue;width: 99%;height: 5px;">
<form method="post" name="f" onsubmit="return validation();">
<table align="center" style="text-align: center;width:30%;border: 2px solid red;background-color: orange;margin-left: 400px;">
		<caption style="text-transform: capitalize;font-size: 30px;font-weight: bold;font-family: courier;">Reset Password Page</caption>
		<tr>
			<th style="font-size: 30px;" align="left">Email:</th><td><input type="text" name="user" autocomplete="on"></td>
		</tr>
		<tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;">
			</tr>
	</table>
</form>
<?php include("footer.php"); ?>
</body>
</html>