<?php
//conection:
//echo "Pavan ";
$myhost="superdealyo.cwnb3mxyxksk.us-west-2.rds.amazonaws.com";
$myuser="root";
$mypassw="superdealyo";
$mydb="superdealyo";

$link = mysqli_connect($myhost,$myuser,$mypassw,$mydb) or die("Error " . mysqli_error($link));

//consultation:

$query = "SELECT company FROM vendor" or die("Error in the consult.." . mysqli_error($link));

//execute the query.

$result = $link->query($query);

//display information:

while($row = mysqli_fetch_array($result)) {
  echo "".$row["company"] . "\n";
} 
?>
