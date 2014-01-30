<?php 
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2006 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$email = $_GET['email'];
$query="SELECT * FROM vendor WHERE email LIKE '$email%'";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
$vendorid = $row["vendorid"];
//Now Delete the Subcat data
$delete = "DELETE FROM  subcat WHERE vendorid='$vendorid' ";
mysql_query($delete);
//Now Delete the Discount data
$delete = "DELETE FROM  discount WHERE vendorid='$vendorid' ";
mysql_query($delete);
//Now Delete the Vendor
$delete = "DELETE FROM  vendor WHERE vendorid='$vendorid' ";
mysql_query($delete);
mysql_close();
echo "Entry deleted";
Header("Location: http://superdealyo.com/index.html");
?>
