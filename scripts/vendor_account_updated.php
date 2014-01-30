<?php
/// information in this file:
/// Copyright 2010 www.go2myworld.com
/// All rights reserved.
include("/var/www/html/scripts/connect.php");
$vendorid = $_POST['vendorid'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$company = $_POST['company'];
$companyurl = $_POST['companyurl'];
$category = $_POST['category'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$mphone = $_POST['mphone'];
$email = $_POST['email'];
//echo "$subid";
$update = "UPDATE vendor  SET  fname = '$fname', mname = '$mname', fname = '$fname', company ='$company',companyurl ='$companyurl', category ='$category', country = '$country', zip = '$zip', address = '$address', city = '$city', state = '$state', phone = '$phone',mphone = '$mphone', email = '$email' WHERE vendorid='$vendorid' ";
$rsUpdate = mysql_query($update);
if ($rsUpdate)
{
echo "Update successful.";
} mysql_close();
Header ("Location:../vendor/vendor_home.html");
?>
 
