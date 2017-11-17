<!DOCTYPE html>
<html>
<head>
	<title></title><style type="text/css">
				#left{
			width: 30%;
			height: 350pt;
			/*border: 2px solid red;*/
			float: left;
		}
		.nav{
	font-size: 20px;
	text-align:left;
	}	
.nav a{
	text-decoration: none;
	color: purple;
}
a:hover{color: blue;
text-decoration: underline;}
a:active{color:red;}
a.selected {
  color: red;
  background: green;
  padding: 10px;
  
}
	</style>
</head>
<body>
<div id="left">
	<h2 align="center" style="font-family:cursive;">Select an option from the menu</h2>
	<hr style="width: 99%;background-color: brown;height:  5px;">
	<div class="nav">
					<a href="dashboard.php">HOME</a><br><br>
					<a href="addphotos.php" >ADD PHOTOS</a><br><br>
					<a href="viewphotos.php " >VIEW/DELETE PHOTOS</a><br><br>
				<!--	<a href="#" >ADD EVENTS</a><br><br>
					<a href="#" >VIEW EVENTS</a><br><br>-->
					<a href="viewuser.php" >VIEW/DELETE USERS</a><br><br>
					<a href="viewenquiry.php" >VIEW/DELETE ENQUIRY</a><br><br>
					<a href="viewreview.php" >VIEW/DELETE REVIEWS</a><br><br>
					<a href="reset.php" >RESET ADMIN PASSWORD</a><br><br>
	</div>
</body>
</html>