<html>
<body>
<?php
/// Get user email from SESSION and get associated data from DB
/// then display the records and allow edit/delete
/// All rights reserved.
include("connect.php");
//if(!isset($_SESSION['email'])){
//echo"Please Create login";
//exit;
//}
$vendorid = $_POST['vendorid'];
echo "$vendorid";
$query="SELECT * FROM vendor WHERE vendorid LIKE '$vendorid%'";
$result = mysql_query($query);
if($row = mysql_fetch_array($result)){
$company = $row["company"];
$companyurl = $row["companyurl"];
$category = $row["category"];
$address = $row["address"];
$city = $row["city"];
$state = $row["state"];
$zip = $row["zip"];
$country = $row["country"];
$phone = $row["phone"];
$mphone = $row["mphone"];
mysql_close();
echo "<b>company:</b> $company<br>";
echo "<b>companyurl:</b> $companyurl<br>";
echo "<b>category:</b> $category<br>";
echo "<b>address:</b> $address<br>";
echo "<b>city:</b> $city<br>";
echo "<b>state:</b> $state<br>";
echo "<b>zip:</b> $zip<br>";
echo "<b>country:</b> $country<br>";
echo "<b>phone:</b> $phone<br>";
echo "<b>mphone:</b> $mphone<br>";
echo "<br><br>";
 }
 else { 
         echo "The database is empty"; 
         mysql_close(); 
      }
?>
</body>
</html>
