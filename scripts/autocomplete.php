<?php
/// Get user email from SESSION and get associated data from DB
/// then display the records and allow edit/delete
/// All rights reserved.
include("connect.php");
$q=$_GET['q'];
//Escape the input dta to prevent SQL injection. 
//$my_data=mysql_real_escape_string($q);
$sql = "SELECT name FROM tag WHERE name LIKE '%$q%' ORDER BY name";
$result = mysql_query($sql)or die(mysql_error());
if($result)
{
   while($row=mysql_fetch_array($result))
   {
           echo $row['name']."\n";
   }
}
         mysql_close(); 
?>
