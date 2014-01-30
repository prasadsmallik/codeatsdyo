<?php
session_start();
include("connect.php");
// Store  variables from the login form
$email = $_POST['email'];
$password = $_POST['password'];
$email = trim($email);
$password = trim($password);
// Check if user is in database
$result = mysql_query("SELECT * FROM vendor WHERE email LIKE '$email%'");

     if($row = mysql_fetch_array($result)){

        $result = mysql_query("SELECT * FROM vendor WHERE email LIKE '$email%' AND password LIKE '$password%'");
        if($row = mysql_fetch_array($result)){
//            print $row["fname"];

              session_start ();
              $_SESSION['fname']=$row["fname"];
              $_SESSION['email']=$row["email"];
//              echo"Welcome ",$_SESSION['fname'];
              mysql_close();
              Header("Location: http://superdealyo.simutel.com/vendor/vendor_home.html");
            }
            else {
             $_SESSION['login_errors'] = array(" Wrong Password. Please try again.");
                header("Location:../vendor/vendor.html");
                 mysql_close();
                 }
            }
            else { 
                $_SESSION['login_errors'] = array("Your login not found, please create one and then try."); 
                  header("Location:../vendor/vendor.html");
                 mysql_close();
                 }
?>
