<?php
 $id=$_GET["w"];
 $status=$_GET["st"];
 // $st1=$_GET["status1"];



$con=mysqli_connect("localhost","root","","project");

if($status==0)
{
	$q="update register set status=1 where s_no='$id'";
$qry=$con->query($q);
	
	echo "<script>alert('User Activated...');</script>";
	//header("location:viewuser.php");
	echo "<script>window.location.href='viewuser.php'</script>";
}
	//
	//



if($status==1)
{
$q="update register set status=0 where s_no='$id'";
$qry=$con->query($q);
	echo "<script>alert('User Deactivated...');</script>";
	//header("location:viewuser.php");
	echo "<script>window.location.href='viewuser.php'</script>";
	  }
	//echo "<script>alert('User Activated...');</script>";
	//echo "<script>window.location.href='viewuser.php'</script>";
?>

