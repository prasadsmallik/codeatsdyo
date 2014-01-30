<?php
/// For the following details,
/// please contact your server vendor
$hostname='superdealyo.cwnb3mxyxksk.us-west-2.rds.amazonaws.com:3306'; //// specify host, i.e. 'localhost'
//$hostname='172.31.3.237:3306';
$user='root'; //// specify username
$pass='superdealyo'; //// specify password
$dbase='superdealyo'; //// specify database name
$port='3306';
//echo "$port";
$connection = mysql_connect($hostname , $user , $pass,$dbase)
or die ("Can't connect to MySQL".mysql_error());
echo "connected";
mysql_select_db($dbase) or die(mysql_error());
echo "$user";
?>
