<?php 
$v=$_GET["rv"];
$con=mysqli_connect("localhost","root","","project");

$q="delete from register where s_no='$v'";
$qry=$con->query($q);
if($qry==TRUE)
{
	//echo "<script>alert('Query deleted successfully...')</script>";
  	//echo "<script>window.location.href='viewuser.php'</script>";
  	//echo "<script>window.location.href='viewuser.php'</script>";
  	header("location:viewuser.php");
}
else
{
echo "<script>alert('There is an error...')</script>";
}



?>