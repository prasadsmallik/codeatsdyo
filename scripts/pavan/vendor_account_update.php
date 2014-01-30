<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2006 www.turningturnip.co.uk
/// All rights reserved.
include("connect.php");
session_start();
if(!isset($_SESSION['email'])){
echo"Please Create login";
exit;
}
$email=$_SESSION['email'];
//echo "$email";
//$id = $_GET['userid'];
//echo "The userid is $id";
$qProfile = "SELECT * FROM vendor WHERE email LIKE '$email%'";
$rsProfile = mysql_query($qProfile);
$row = mysql_fetch_array($rsProfile);
//extract($row);
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
$mobile = $row["mphone"];
$email = $row["email"];
mysql_close();
?>
<form id="FormName" action="vendor_account_updated.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">
<!---<tr><td width="150"><div align="right">
<label for="vendorid">vendorid</label></div>
</td>
<td>
<input id="vendorid" name="vendorid" type="text" size="25" value="<?php echo $vendorid ?>" maxlength="11"></td>
</tr>--> 
<tr><td width="150"><div align="right">
<label for="fname">fname</label></div>
</td>
<td>
<input id="fname" name="fname" type="text" size="25" value="<?php echo $fname ?>" maxlength="40"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="mname">mname</label></div>
</td>
<td>
<input id="mname" name="mname" type="text" size="25" value="<?php echo $mname ?>" maxlength="40"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="lname">lname</label></div>
</td>
<td>
<input id="lname" name="lname" type="text" size="25" value="<?php echo $lname ?>" maxlength="40"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="company">company</label></div>
</td>
<td>
<input id="company" name="company" type="text" size="25" value="<?php echo $company ?>" maxlength="40"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="companyurl">companyurl</label></div>
</td>
<td>
<input id="companyurl" name="companyurl" type="text" size="25" value="<?php echo $companyurl ?>" maxlength="40"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="category">category</label></div>
</td>
<td>
<input id="category" name="category" type="text" size="25" value="<?php echo $category ?>" maxlength="40"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="address">address</label></div>
</td>
<td>
<input id="address" name="address" type="text" size="25" value="<?php echo $address ?>" maxlength="40"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="city">city</label></div>
</td>
<td>
<input id="city" name="city" type="text" size="25" value="<?php echo $city ?>" maxlength="20"></td>
</td>
<tr><td width="150"><div align="right">
<label for="state">state</label></div>
</td>
<td>
<input id="state" name="state" type="text" size="25" value="<?php echo $state ?>" maxlength="20"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="zip">zip</label></div>
</td>
<td>
<input id="zip" name="zip" type="text" size="25" value="<?php echo $zip ?>" maxlength="8"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="country">country</label></div>
</td>
<td>
<input id="country" name="country" type="text" size="25" value="<?php echo $country ?>" maxlength="20"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="phone">phone</label></div>
</td>
<td>
<input id="phone" name="phone" type="text" size="25" value="<?php echo $phone ?>" maxlength="20"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="mobile">mobile</label></div>
</td>
<td>
<input id="mobile" name="mobile" type="text" size="25" value="<?php echo $mobile ?>" maxlength="20"></td>
</tr>
<tr><td width="150"><div align="right">
<label for="email">email</label></div>
</td>
<td>
<input id="email" name="email" type="text" size="25" value="<?php echo $email ?>" maxlength="40"></td>
</tr>
<tr>
<td width="150"></td>
<td><input type="submit" name="submitButtonName" value="Update"><input type="hidden" name="vendorid" value="<?php echo $vendorid ?>"></td>
</tr>
</table>
</form>

