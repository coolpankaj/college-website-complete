<?php 
$id=$_GET["w"];
$st=$_GET["status"];
$con=mysqli_connect("localhost","root","","project");

echo $id;

echo $st;
if($st==0)
{
echo "Its 0";

}


if($st==2)
{

	echo "its 2"; 
} 

?>