<?php
session_start();
/// information in this file:
/// Copyright 2014 www.superdealyo.com
/// All rights reserved.
include("/var/www/html/scripts/connect.php");
$vendorid = $_POST['vendorid'];
$upc = $_POST['upc'];
//Convert 12 digit UPC to 13 digit EAN-13 by adding a leading 0
$num = strlen($upc);
//echo $num;
if($num==12){
$upc = "0".$upc;
}
//echo $upc;
$result_cd = mysql_query("SELECT * FROM upc WHERE upc LIKE '$upc'");
        if($row = mysql_fetch_array($result_cd)){
echo "Offering code verified.";
print "<BR>";
$codeid = $row["codeid"];
$itemname = $row["itemname"];
//echo "codeid:$codeid\n";
//echo "code:$upc[$j]\n";
//echo "item name:$itemname\n";
//print "<BR>";
 $_SESSION['upc'] = $upc;
 $_SESSION['itemname'] = $itemname;
              header("Location:../vendor/discount_add.html");
            }
            else {
             $_SESSION['upc_errors'] = array("No such code:$upc in the database yet. Please try another.");
               header("Location:../vendor/discount_code_add.html");
                 }
mysql_close();
?>
 
