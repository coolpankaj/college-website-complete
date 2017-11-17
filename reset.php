<?php
$id=$_GET["c"];
if(isset($_POST["submit"]))
{

$pass=$_POST["pass"];

$con=mysqli_connect("localhost","root","","project");
$q="update register set pass1=$pass where email='$id' ";
$qry=$con->query($q);
if($qry==TRUE)
{
	echo "<script>alert('Password Updated Successfully......Visit Homapage');</script>";
	echo "<script>window.location.href='index.php'</script> ";
}
else
{
echo "<script>alert('Something Went Wrong........');</script>";
}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>reset password..</title>
	<script type="text/javascript">
		function validate()
			{
	var letters = /^[A-Za-z]+$/;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
var p1=document.form.pass.value;
var p2=document.form.pass2.value;
if(document.form.pass.value == "")
	{
		alert("please enter password");
		document.form.pass.focus();
		return false;
	}
else if(document.form.pass2.value == "")
	{
		alert("please enter confirm password");
		document.form.pass2.focus;
		return false;
	}
else if(p1 != p2)
	{
		alert("The second  passwords do not match");
		return false;
	}
}
	</script>
</head>

<body style="background-color: lightblue;">
<?php include("header.php"); ?>
<hr style="background-color:blue;width: 99%;height: 5px;">
<form method="post" name="form" onsubmit="return validate();" >
	<table align="center" style="text-align: center;width:30%;border: 2px solid red;background-color: orange;">
		<caption style="text-transform: capitalize;font-size: 30px;font-weight: bold;font-family: courier;">Reset Form</caption>
		<tr>
			<th style="font-size: 20px;" align="left">New Password:</th><td><input type="Password" name="pass" ></td>
		</tr>
		<tr>
			<th style="font-size: 20px;" align="left">Confirm Password:</th><td><input type="Password" name="pass2" ></td>
		</tr>
				
				<tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;"></td></tr>
				</table>
				</form>
				<?php include("footer.php"); ?>

</body>
</html>