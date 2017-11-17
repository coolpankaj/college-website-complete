<?php


session_start();
if(isset($_POST["submit"]))
{
	$email=$_POST["user"];
	$pass=$_POST["pass"];
	$chk=isset($_GET["chk"]);
	if($chk)
	{
		setcookie("user",$email,time()+10);
		setcookie("pass",$pass,time()+10);
	}
else{
	setcookie("user","",time()-1);
	setcookie("pass","",time()-1);

	}



	$con=mysqli_connect("localhost","root","","project");
	$q="select * from register where email='$email' and pass1='$pass' ";
	$qry=$con->query($q);
	if($qry->num_rows>0)
	{
		$q2="select * from register where status=1 and email='$email' ";
		$qry2=$con->query($q2);
		if($qry2->num_rows>0)
		{
		$_SESSION["phpssid"]=$email;
		echo "<script>alert('Login Successfull......');</script>";
		//header("location:contact.php");
		echo "<script>window.location.href='index.php'</script>";
}else{
	echo "<script>alert('You are deactivated by Admin....');</script>";
	echo "<script>window.location.href='index.php'</script>";
}
	}
	else {
	
	echo "<script>alert('Invalid Login...');</script>";
	echo "<script>window.location.href='index.php'</script>";
}
}
if(isset($_SESSION["phpssid"]))
{
	echo "Welcome:".$_SESSION["phpssid"]."<a href='logout.php'>Logout</a>";
}
else {

	echo "Welcome Guest!!!!....";
	 //include("index.php");
}
?>