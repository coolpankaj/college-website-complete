<?php 
$a=$_GET["rv"];
$con=mysqli_connect("localhost","root","","project");

$q="delete from review where s_no='$a'";
$qry=$con->query($q);
if($qry==TRUE)
{
	echo "<script>alert('Query deleted successfully...')</script>";
  	//echo "<script>window.location.href='viewuser.php'</script>";
  	echo "<script>window.location.href='viewreview.php'</script>";
  	
}
else
{
echo "<script>alert('There is an error...')</script>";
}



?>