<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2006 www.turningturnip.co.uk
/// All rights reserved.

session_start();
if(!isset($_SESSION['email'])){
echo"Please Create login";
exit;
}
$email=$_SESSION['email'];
//echo "Test";
//echo "$email";
?>
<div align="center">
<h2>Are you sure?</h2>
<h2><a href="vendor_account_deleted.php?email=<?php echo "$email" ?>">Yes</a> - <a href="/vendor/vendor_home.html">No</a></h2>
</div>
