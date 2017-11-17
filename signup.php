<?php
error_reporting(4); 
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$gender=$_POST["gen"];
	$email=$_POST["mail"];
	$pass1=$_POST["pass1"];
	$mobile=$_POST["mob"];
	$city=$_POST["city"];
	$pincode=$_POST["pin"];
	$picture=$_FILES["pic"]["name"];
	move_uploaded_file($_FILES["pic"]["tmp_name"],'photos/'.$picture);
$con=mysqli_connect("localhost","root","","project");
$q2="select * from register where email='$email' ";
$qry2=$con->query($q2);
if($qry2->num_rows>0)
{
	echo "<script>alert('Email already registered...');</script>";
}
else{
$q="insert into register values ('','$name','$gender','$email','$pass1','$mobile','$city','$pincode','$picture','')";
$qry=$con->query($q);


if($qry==TRUE)
{
	echo "<script>alert('Record Added Successfully......');</script>";
}
else {
	echo "<script>alert('ERROR...');</script>";
}

}}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up</title>
	<link rel="stylesheet" type="text/css" href="css/sign.css">
	<script>
		
function fun_validate()
{
var letters = /^[A-Za-z]+$/;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 


if(document.signup.name.value == "")
	{
		alert("please enter first name");
		document.signup.name.focus();
		return false;
	}
else if(!(document.signup.name.value.match(letters)))
	{
		alert("Name must have alphabet characters only");
		document.signup.name.focus();
		return false;
	}
else if(!(document.signup.gen[0].checked) && !(document.signup.gen[1].checked))
	{
		alert("Please select gender");
		return false;
	}
	else if(document.signup.mail.value == "")
	{
		alert("please enter email id");
		document.signup.mail.focus();
		return false;
	}
else if(!(document.signup.mail.value.match(mailformat)))  
	{  
		alert("You have entered an invalid email address!");  
		document.signup.mail.focus();  
		return false; 
	} 
else if(document.signup.pass1.value == "")
	{
		alert("please enter password");
		document.signup.pass1.focus();
		return false;
	}
else if(document.signup.mob.value == "")
	{
		alert("please enter mobile no");
		document.signup.mob.focus();
		return false;
	}
else if(isNaN(document.signup.mob.value)||document.signup.mob.value.indexOf(" ")!=-1)
		{
              alert("mobile number must be numeric")
              return false; 
			}
else if ((document.signup.mob.value.length < 10) || (document.signup.mob.value.length > 10))
			{
                alert("mobile number must be of 10 digits");
                return false;
			}
else if ((document.signup.mob.value.charAt(0)!="9") && (document.signup.mob.value.charAt(0)!="8") && (document.signup.mob.value.charAt(0)!="7"))
	  {
                alert("mobile number must start with 9 or 8 or 7");
                return false
           } 

	else if(document.signup.city.value=="select") 
	{
		alert("please select city");
		document.signup.city.focus();
		return false;
	}
	else if(document.signup.pin.value=="")
	{
		alert("please enter picode");
		document.signup.pin.focus();
		return false;
	}
	else if(document.signup.pic.value=="")
	{
		alert("please select picture");
		document.signup.pic.focus();
		return false;
	}
}


</script>
	
</head>
<body style="background-image:url(images/back1.jpg);background-repeat: no-repeat;">
<?php include("header.php");?>
	
	<hr style="width: 99%;height: 20px;background-color:lightgreen;border-radius: 30px;">
	<h1 align="center" style="font-style: courier;">Sign-Up Form</h1>
	<form method="post" enctype="multipart/form-data" name="signup" onsubmit="return fun_validate();">
		<table align="center" style="width: 40%;background-color:#00CED1;border: 3px solid black;margin-left: 400px;">
			<tr>
				<th align="left">NAME:</th><td><input type="text" name="name" id="name" placeholder="Enter Name Here" required></td>
			</tr>
			<tr>
				<th align="left">GENDER:</th><td><input type="radio" name="gen" id="gen" value="male"  required>MALE<input type="radio" name="gen" id="gen" value="female"  required>FEMALE </td>
			</tr>
			<tr>
				<th align="left">E-MAIL:</th><td><input type="text" name="mail" id="mail" placeholder="E-mail id"  required></td>
			</tr>
			<tr>
				<th align="left">PASSWORD:</th><td><input type="PASSWORD" name="pass1" id="pass1" placeholder="Create New Password"  required></td>
			</tr>
			<!--<tr>
				<th align="left">RETYPE PASSWORD:</th><td><input type="Password" name="pass2" placeholder="Retype Password"></td>
			</tr>-->
			<tr>
				<th align="left">MOBILE:</th><td><input type="text" name="mob" id="mob" placeholder="Enter Mobile Number"  required></td>
			</tr>
			<tr>
				<th align="left">CITY:</th>
				<td>					<select name="city" id="city"  required>
											<option value="select">Select City</option>
											<option>Mumbai</option>
											<option>New Delhi</option>
											<option>Hyderabad</option>
											<option>Chennai</option>
											<option>Kolkata</option>
											<option>Bhopal</option>
											<option>Patna</option>
											<option>Uttar Pradesh</option>
					
				                        </select>
				</td>
			</tr>
			<tr>
				<th align="left">PINCODE:</th><td><input type="text" name="pin" id="pin" placeholder="Enter Pincode"  required></td>
			</tr>
			<tr>
				<th align="left">PROFILE PIC:</th><td><input type="file" name="pic" id="pic" placeholder="Select Photo"  required></td>
			</tr>
			<tr><td align="right"><input type="submit" name="submit" value="submit" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;"></td>&nbsp&nbsp&nbsp&nbsp&nbsp
			<td><input type="reset" name="reset" value="reset" style="text-transform: uppercase;color: white;background-color:#8A2BE2;font-size:15px;"></td>


			</tr>
			

		</table>
	</form>
	<!--<?php include("footer.php");?>-->
	<br><hr><br>
	<h1 align="center" style="background-color: black;color: white;border-radius: 10px;">Copyright &copy 2017</h1>
</body>
</html>

