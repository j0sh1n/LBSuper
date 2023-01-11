<?php
include("config.php");
include("firebaseRDB.php");
include("nav.html");


$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if ($id != "") {
   $delete = $db->delete("Users", $id);
}

header("Location:view_users.php");
