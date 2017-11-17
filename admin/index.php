<?php
session_start();
if (isset($_POST["submit"])) 
{
$user=$_POST["user"];
$pass=$_POST["pass"];
$con=mysqli_connect("localhost","root","","project");
$q="select * from admin where admin_id='$user' and pass='$pass' ";
$qry=$con->query($q);
if($qry->num_rows>0)
{
      echo "<script>alert('Welcome Admin....' );</script>";
      $_SESSION["ssid"]=$user;
      echo "<script>window.location.href='dashboard.php'</script> ";
}
else{
      echo "<script>alert(' invalid login attempt....');</script>";
}

 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<script type="text/javascript">
		function validation()
		{
			var letters = /^[A-Za-z]+$/;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
            if(document.adminlogin.user.value=="")
            {
            	alert("Enter admin id....");
            	document.adminlogin.user.onfocus();
            	return false;
            }
            
            else if(document.adminlogin.pass.value=="")
            {
            	alert("Password cannot be blank...");
            	document.adminlogin.pass.onfocus();
            	return false;
            }

		}
	</script>
</head>
<body style="background-image: url(../images/bg.jpg);">

<h1 align="center" style="font-size: 30pt;font-family: courier;">Admin Login Page</h1>
<hr style="background-color:blue;width:50%;height: 5px;">
<form method="post" name="adminlogin" onsubmit="return validation();">
	<table align="center" width="30%" border="1px solid blue">
	<tr>
		<th>Admin id:</th><td><input type="text" name="user"></td>
	</tr>
	<tr>
		<th>Password:</th><td><input type="Password" name="pass"></td>
	</tr>
	<tr><td align="center" colspan="2"><input type="submit" name="submit" value="submit" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;"></td></tr>
	</table>
</form>
<?php //include("../footer.php"); ?>
</body>
</html>