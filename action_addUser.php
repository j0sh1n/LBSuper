<?php
include("config.php");
include("firebaseRDB.php");
include("nav.html");


$db = new firebaseRDB($databaseURL);
//$id = $_POST['id'];
$insert = $db->insert("Users", [
   "fname" => $_POST['fname'],
   "lname" => $_POST['lname'],
   "gender" => $_POST['gender'],
   "address" => $_POST['address'],
   "covStat" => $_POST['covStat'],
   "company" => $_POST['company'],
   "employment" => $_POST['employment'],
   "email" => $_POST['email'],
   "pass" => $_POST['pass']
]);

header("Location:view_users.php");
