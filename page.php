<?php
$con=mysqli_connect("localhost","root","","contact");


$q = "select * from enquiry";

//---------Find Number Of Records--------
$qry = $con->query($q);
$num_of_record = $qry->num_rows;

$perPage = "3";
$totalPage = ceil($num_of_record/$perPage);

$page = 1;
if(isset($_GET['page'])){
	
	$page = $_GET['page'];


$start = ($page-1) * $perPage;

$q = "select * from enquiry LIMIT $start, $perPage";

$qry = $con->query($q);

if($qry->num_rows>0 )
{
?>
	
	<table border="1" width='25%'>
         <tr>
			<th>name</th>
          		<th>gender</th>
            	</tr>
		  <?php
		 		 while($row = $qry->fetch_array())
				 
				 {
		 	
		 ?>
		 	<tr>
			
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2];?></td>
				
				
			 </tr>
		 <?php
		 } 
		 ?>
		 <tr>
		 	<td colspan="5">
			<?php
			
			///**********************************************************
			if($page>1)
			{
			$pre=$page-1;
			echo "<a href='user.php?page=$pre'>Previous&nbsp;&nbsp;</a>";
			}
			else
			{
			$pre=1;
			}
			///**************************************************************/
			
			for($i=1 ;$i<=$totalPage; $i++){
				
				
				echo "<a href='user.php?page=$i'>$i</a> &nbsp;&nbsp;| &nbsp;&nbsp;";
				
			}
			
			//  /*****************************************************************************************
			if($page<$totalPage)
			{
			$next=$page+1;
			echo "<a href='user.php?page=$next'>next</a>";
			
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