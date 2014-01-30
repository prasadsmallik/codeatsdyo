<?php
session_start();
if(!isset($_SESSION['fname'])){
echo"Please login";
exit;
}
echo"Thank you, ",$_SESSION['fname'],", "," You are now logged off.";
session_unset();
session_destroy();
#Header("Location:http://superdealyo.simutel.com");
exit;
?>
