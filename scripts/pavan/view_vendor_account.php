<html>
<body>
<?php
/// Get user email from SESSION and get associated data from DB
/// then display the records and allow edit/delete
/// All rights reserved.
include("connect.php");
session_start();
if(!isset($_SESSION['email'])){
echo"Please Create login";
exit;
}
$email=$_SESSION['email'];
//echo "$email";
$query="SELECT * FROM vendor WHERE email LIKE '$email%'";
$result = mysql_query($query);
if($row = mysql_fetch_array($result)){
$vendorid = $row["vendorid"];
$fname = $row["fname"];
$mname = $row["mname"];
$lname = $row["lname"];
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
$email = $row["email"];
mysql_close();
echo "<b>vendorid:</b> $vendorid<br>";
echo "<b>fname:</b> $fname<br>";
echo "<b>mname:</b> $mname<br>";
echo "<b>lname:</b> $lname<br>";
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
echo "<b>email:</b> $email<br>";
//echo "<a href=\"update.php?id=$subid\">Update</a> - <a href=\"delete.php?id=$subid\">Delete</a>";
echo "<a href=\"vendor_account_update.php\">Update</a> - <a href=\"vendor_account_delete.php\">Delete</a>";
echo "<br><br>";
 }
 else { 
         echo "The database is empty"; 
         mysql_close(); 
      }
?>
</body>
</html>
