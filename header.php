<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	

	<style>
	 *{
      margin: 0px;
      padding: 0px;
    }
#header{
	width:100%;
	height: auto;
	/*border: 3px solid pink;*/
  
	
}
#logo{
	background-color: white;
	width: 26%;
	height:100px;
	/*border: 2px solid red;*/
	float: left;
}
#logoname{
	width: 74%;
	height: 100px;
	/*border: 2px solid green;*/
	float: right;
	background-color: #90BDC3;
	text-transform: uppercase;
	color: white;
	font-size: 70pt;
	text-align: center;
	font-family: inherit;

}
.nav{
	width:100%;
	height: 40px;
	background-color:lightblue;
	border: 2px solid black;
	font-size: 20px;
	text-align: center;
	word-spacing: 150px;
	

}	
.nav a{
	text-decoration: none;
	color: purple;
}
a:hover{color: blue;background-color:lightpink;padding:2px;border-radius: 10px;}
a:active{color:red;}
a.selected {
  color: red;
  background: green;
  padding: 10px;
}
#banner{
	width:100%;
	height: 300px;
	/*border: 2px solid green;*/
	
}

 #slider 
 {width:100%;height:100%;position:relative; overflow: hidden; clear:both; margin:auto;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 7px 20px 7px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}

	</style>
	<script language="javascript" type="text/javascript" src="js/js-image-slider.js"></script>
 
  
</head>
<body>


		<div id="header">
			<div id="logo"><img src="images/logo.bmp" style="width: 100%;height: 100%"></div>
				<div id="logoname"><em>kitm kurukshetra</em></div>
					<hr style="background-color:blue;width: 100%;height: 2px;">
          

			<!--	<div class="nav">-->
				<div  class="nav">	<a href="index.php" >HOME</a>
				<a href="courses.php">COURSES</a>
					<a href="contact.php" >CONTACT</a>
					<a href="reviews.php" >REVIEWS</a>
					<?php
					if(isset($_SESSION["phpssid"]))
{
	echo "Welcome:".$_SESSION["phpssid"]."<a href='logout.php'><button style='width:10%;'>Logout</button></a>";
	echo '<audio src="extra/music.mp3" loop="infinite" autoplay></audio>';

}
else {?>

	<!--echo "Welcome Guest!!!!....";-->

				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
				<?php  } ?>
					

				<!--</div>--></div>
							<div id="banner">
									         	<div id="slider">
													<?php
														$con=mysqli_connect("localhost","root","","project");
														$q="select * from banner";
														$qry=$con->query($q);

														while ($r=$qry->fetch_array())
														 {
														 	echo "<tr>";					           
														    echo "<td><img  src='admin/banner/$r[1]' ></td>";
														    echo "</tr>";
									         			}
															//echo "</table>";

													?>	

												</div>
							
				</div>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 7px 20px 7px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: inline-block;
       float: left;
    }
    .cancelbtn {
       width: 100%;
    }
}

  </style>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</head>
<body>



<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/lock.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit" name="submit" value="submit">Login</button>
      <input type="checkbox" name="chk" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      <span class="psw"><a href="forgot.php">Forgot Password?</a>&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="signup.php">New User!!!</a></span>
    </div>
  </form>
</div>


<?php header("location:index.php"); ?>
</body>
</html>