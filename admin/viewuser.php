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
	<title>Admin Dashboard</title>
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
$q="select * from register";
$qry=$con->query($q);

$num_of_record = $qry->num_rows;

$perPage = "2";
$totalPage = ceil($num_of_record/$perPage);

$page = 1;
if(isset($_GET['page']))
{
  
  $page = $_GET['page'];
}

$start = ($page-1) * $perPage;

$q = "select * from register LIMIT $start, $perPage";

$qry = $con->query($q);

if($qry->num_rows>0 )
{

echo "<table border='1px solid blue' width='80%' align='center'>";
echo "<caption><h1>User Table</h1></caption>";
echo           "<th>S.No</th>
 				<th>Name</th>
 				<th>Gender</th>
 				<th>Email</th>
 				<th>Password</th>
                 <th>Mobile</th>
                 <th>City</th>
                 <th>Pincode</th>
                 <th>Picture</th>
                 <th>Delete</th>
                 <th>Status</th>";               
while ($r=$qry->fetch_array())
 {
 		
             echo "<tr><td>".$r[0]."</td>";
              echo "<td>".$r[1]."</td>";
               echo "<td>".$r[2]."</td>";
               echo "<td>".$r[3]."</td>";
               echo "<td>".$r[4]."</td>";
               echo "<td>".$r[5]."</td>";
               echo "<td>".$r[6]."</td>";
               echo "<td>".$r[7]."</td>";
               

             echo "<td><img src='../photos/$r[8]' height='100' width='100'></td>";
                        //echo "<td>Edit</td>";
                        echo "<td><a style='text-decoration:none;font-size:20px;' href='deletedata.php?rv=$r[0]'>Delete</a></td>";
                        if ($r[9]==0) 
                        {
                        	echo "<td><a style='text-decoration:none;color:red;font-size:20px;' href='statususer.php?w=$r[0] && st=$r[9]'>Deactive</a></td> ";

                       }
                       else
                       {
                       	echo "<td><a style='text-decoration:none;color:green;font-size:20px;' href='statususer.php?w=$r[0] && st=$r[9]'>Active</a></td> ";

                       }

                 echo "</tr>";


}

?>
	 <tr>
      <td colspan="11">
      <?php
      
      ///**********************************************************
      if($page>1)
      {
      $pre=$page-1;
      echo "<a href='viewuser.php?page=$pre'>Previous&nbsp;&nbsp;</a>";
      }
      else
      {
      $pre=1;
      }
      ///**************************************************************/
      
      for($i=1 ;$i<=$totalPage; $i++)
      {
        
        
        echo "<a href='userpageing.php?page=$i'>$i</a> &nbsp;&nbsp;| &nbsp;&nbsp;";
        
      }
      
      //  /*****************************************************************************************
      if($page<$totalPage)
      {
      $next=$page+1;
      echo "<a href='userpageing.php?page=$next'>next</a>";
      
      }
        else
      {
      $next=$totalPage;
      }
      //***************************************************************************************/
      
      ?>
      </td>
     </tr>
  </table>
<?php
}
else{
?>
  <table>
  <tr>
    <td valign="middle" align="left"><h1>RECORDS NOT FOUND!</h1>  
    </td>
  </tr>
  </table>
<?php 
}
?>
	</div>
<?php include("options.php");?>

</div>
</body>
</html>