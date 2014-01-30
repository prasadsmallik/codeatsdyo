<?php
/// information in this file:
/// Copyright 2010 www.go2yworld.com
/// All rights reserved.
include("connect.php");
$email = $_POST['email2'];
$password = $_POST['password2'];
$newpassword= $_POST['newpassword'];
$query = "SELECT * FROM vendor WHERE email LIKE '$email%' AND password LIKE '$password%'";
$results = mysql_query($query);

if ($results)
{
$update = "UPDATE vendor SET password = '$newpassword' WHERE email='$email'";
$rsUpdate = mysql_query($update);
}
if ($rsUpdate)
{
echo "Your password has been changed.";
}
mysql_close();
?>
<a href="/vendor/vendor.html">Back to Vendor Login Page</a><br>
<br>
