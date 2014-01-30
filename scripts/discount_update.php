<?php
/// information in this file:
/// Copyright 2010 www.go2myworld.com
/// All rights reserved.
include("/var/www/html/scripts/connect.php");
$vendorid = $_POST['vendorid'];
$data1 = "item";
$data2 = "upc";
$data3 = "discount";
$data4 = "unit";
$data5 = "startdate";
$data6 = "enddate";
for($i=1;$i<4;$i++){
$item = $data1.$i;
$upc = $data2.$i;
$discount = $data3.$i;
$unit = $data4.$i;
$startdate = $data5.$i;
$enddate = $data6.$i;
$item = $_POST['item'];
$upc = $_POST['upc'];
$discount = $_POST['discount'];
$unit = $_POST['unit'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
}
echo "$item1";
echo "$item2";
echo "$item3";
echo "$upc1";
echo "$upc2";
echo "$upc3";
$item = array($item1,$item2,$item3);
$upc = array($upc1,$upc2,$upc3);
$discount = array($discount1,$discount2,$discount3);
$unit = array($unit1,$unit2,$unit3);
$startdate = array($startdate1,$startdate2,$startdate3);
$enddate = array($enddate1,$enddate2,$enddate3);
$timestamp = time();
echo "$item[0]";
echo "$item[1]";
echo "$item[2]";
echo "$upc[0]";
echo "$upc[1]";
echo "$upc[2]";
for($j=0;$j<3;$j++){
echo "$item[$j]";
echo "$upc[$j]";
echo "$vendorid";
$query="SELECT * FROM discount WHERE vendorid LIKE '$vendorid%' AND item LIKE '$item[$j]%'";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
$discountid = $row["discountid"];
echo "$discountid";
echo "$unit[$j]";
$update = "UPDATE discount  SET   discount = '$discount[$j]', unit = '$unit[$j]', startdate ='$startdate[$j]', enddate = '$enddate[$j]', timestamp = '$timestamp' WHERE discountid = '$discountid%' ";
$rsUpdate = mysql_query($update);
}
if ($rsUpdate){
echo "Update successful.";
} mysql_close();
Header ("Location:../vendor/vendor_home.html");
?>
 
