<?php
/// information in this file:
/// Copyright 2010 www.go2myworld.com
/// All rights reserved.
include("/var/www/html/scripts/connect.php");
$company = $_POST['company'];
$zip = $_POST['zip'];
echo "$company";
echo "$zip";
$result = mysql_query("SELECT * FROM vendor WHERE zip LIKE '$zip%' AND company LIKE '$company%'");

 
        if($row = mysql_fetch_array($result)){
            print $row["company"];
$vendorid = $row["vendorid"];
//echo "$vendorid";
            }
            else {
             echo " No such Company in this Zip code in our Database yet. Please try another search.";
                 mysql_close();
                 }
{
echo "Search successful.";
} mysql_close();

Header ("Location:../discountbyvendor.html");
?>
 
