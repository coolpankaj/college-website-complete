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
	<title>View Photos </title>
	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	#container{
		width: 100%;
		height: auto;
	/*	border: 2px solid orange;*/
}
#right{
			width: 68%;
			height: 350pt;
		/*	border: 2px solid red;*/
			float: right;
      overflow: hidden;

			}

	</style>
</head>
<body style="background-image: url(../images/bg.jpg);">
<div id="container">

<h1 align="center" style="font-size: 30pt;font-family: courier;">Admin Dashboard</h1>
<hr style="background-color:blue;width: 99%;height: 5px;">

<div id="right">

<?php
$con=mysqli_connect("localhost","root","","project");
$q="select * from banner";
$qry=$con->query($q);
$num_of_record = $qry->num_rows;
$qry = $con->query($q);
$num_of_record = $qry->num_rows;

$perPage = "2";
$totalPage = ceil($num_of_record/$perPage);

$page = 1;
if(isset($_GET['page']))
{
	
	$page = $_GET['page'];
}

$start = ($page-1) * $perPage;


$q = "select * from banner LIMIT $start, $perPage";

$qry = $con->query($q);
if($qry->num_rows>0 )
{


echo "<table border=1 width='50%' style='margin-left:200px;'>";
echo           "<th>S.No</th>
 				<th>Photos</th>
                 <th>Delete</th>";
                        
while ($r=$qry->fetch_array())
 {
 		
             echo "<tr><td>".$r[0]."</td>";
               echo "<td><img src='banner/$r[1]' height='120' width='400'></td>";
             echo "<td><a href='deletephoto.php?dr=$r[0]'>Delete</a></td>";
            
                 echo "</tr>";


}
	 
		 
		 ?>
		 <tr>
		 	<td colspan="3">
			<?php
			
			///**********************************************************
			if($page>1)
			{
			$pre=$page-1;
			echo "<a  href='viewphotos.php?page=$pre'>Previous&nbsp;&nbsp;</a>";
			}
			else
			{
			$pre=1;
			}
			///**************************************************************/
			
			for($i=1 ;$i<=$totalPage; $i++)
			{
				
				
				echo "<a href='photopageing.php?page=$i'>$i</a> &nbsp;&nbsp;| &nbsp;&nbsp;";
				
			}
			
			//  /*****************************************************************************************
			if($page<$totalPage)
			{
			$next=$page+1;
			echo "<a  href='photopageing.php?page=$next'>next</a>";
			
			}
				else
			{
			$next=$totalPage;
			}
			//***************************************************************************************/
			
			
			echo '</td>';
		 echo '</tr>';
		 echo "</table>";}


else{?>
	<table>
	<tr>
		<td valign="middle" align="left"><h1>RECORDS NOT FOUND!</h1>	
		</td>
	</tr>
	</table>
<?php }
?>


	</div>
<?php include("options.php");?>

</div>
</body>
</html>
