<?php 
$msg='';
if(isset($_POST["submit"]))
{
$name=$_REQUEST["name"];
$email=$_REQUEST["mail"];
$phone=$_REQUEST["mob"];
$message=$_REQUEST["msg"];
$gender=$_REQUEST["gen"];

$msg .="Quick Enquiry<br>";  
   
		   $msg .="<b>Name</b>------------------" . $name. "<br>";
		 	$msg .="<b>Email</b>-------------------------" .$email. "<br>";
			$msg .="<b>Mobile</b>----------------" . $phone . "<br>";	
			$msg .="<b>Message</b>----------------" . $message . "<br>";		
		   $msg .="<b>Gender</b>-------------------" .$gender ."<br>";
				 $sub="Enquiry";
	         $from=$email;
			
	         $to="pankajsaini982134@gmail.com";
  
	          
 $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
               $headers .= 'From:'.$email . "\r\n" .
                     'Reply-To:' . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();

					 if ( mail($to,$sub,$msg,$headers))
					 {
					 echo "<THANK YOU !!!
<br />

</font>";
					 }
					 else
					 {
					
					echo "unable to sent mail";
					}
					 
	   
			

}
?>
<!--
<form method="post">
name <input type="text" name="name">
complany<input type="text" name="c_name">
email <input type="text" name="email">
phone <input type="text" name="phone">
reviews<input type="text" name="comments">

<input type="submit" name="submit" value="submit">
</form>-->