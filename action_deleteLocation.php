<?php
include("config.php");
include("firebaseRDB.php");
include("nav.html");


$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if ($id != "") {
   $delete = $db->delete("Management", $id);
   echo "data deleted!";
}

header("Location:view_locations.php");

