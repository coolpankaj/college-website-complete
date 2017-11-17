<?php
session_start();
unset($_SESSION["ssid"]);

echo "<script>alert('Logout Successfull.......You are redirected to Login Page...');</script>";
echo "<script>window.location.href='index.php'</script>";



?>