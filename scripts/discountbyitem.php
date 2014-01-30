<?php
/// information in this file:
/// Copyright 2010 www.go2myworld.com
/// All rights reserved.
include("/var/www/html/scripts/connect.php");
$item = $_POST['item'];
$category = $_POST['category'];
$zip = $_POST['zip'];
$result = mysql_query("SELECT * FROM vendor WHERE zip LIKE '$zip%' AND category LIKE '$category%'");
        if($row = mysql_fetch_array($result)){
//            print $row["company"];
$vendorid = $row["vendorid"];
echo "$vendorid";
            }
            else {
             echo " No such Company in this Zip code in our Database yet. Please try another search.";
                 mysql_close();
                 }
{
echo "Search successful.";
} mysql_close();
Header ("Location:../discountbyitem.html");
?>
 
