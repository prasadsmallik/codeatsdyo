<?php
/// information in this file:
/// Copyright 2010 www.go2myworld.com
/// All rights reserved.
include("connect.php");
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$company = $_POST['company'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$mphone = $_POST['mphone'];
$email = $_POST['email2'];
$query = "SELECT * FROM vendor WHERE email LIKE '$email%' AND lname LIKE '$lname%'";
$results = mysql_query($query);

if ($results)
{
$password = "temp123";
$update = "UPDATE vendor SET password = '$password' WHERE email='$email'";
$rsUpdate = mysql_query($update);
}
if ($rsUpdate)
{
echo "Your password has been set to temp123 please login and change it.";
}
mysql_close();
?>
<a href="/vendor/vendor.html">Back to Vendor Login Page</a><br>
<br>
