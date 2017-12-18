<?php
 
require 'db_connect.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$dob    = $conn->real_escape_string($_POST['datebirth']);
$adno = $conn->real_escape_string($_POST['adno']);
$area = $conn->real_escape_string($_POST['addr']);
$wallet = $conn->real_escape_string($_POST['wall']);
$query   = "INSERT into ashu (name,email,dob,adhar,area,wallet) VALUES('" . $name . "','" . $email . "','" . $dob . "','" . $adno . "','" . $area . "','" . $wallet . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>