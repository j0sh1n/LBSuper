<?php
include("config.php");
include("firebaseRDB.php");
include("nav.html");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("Management/$id");
$data = json_decode($retrieve, 1);

?>
<div class="form-container">

   <form method="post" action="action_editLocation.php">
      <table class="form">
         <tr>
            <th colspan="2">Register a Location</th>
         </tr>
         <tr>
            <td>Name of Establishment</td>
            <td><input type="text" name="name" value=""></td>
         </tr>
         <tr>
            <td>Address</td>
            <td><input type="text" name="address" value=""></td>
         </tr>
         <tr>
            <td>Date account is created</td>
            <td><input type="text" name="date" value=""></td>
         </tr>
         <tr>
            <td>Number of current checked in</td>
            <td><input type="text" name="checkIns" value=""></td>
         </tr>

         <tr>
            <td>COVID presence</td>
            <td><input type="text" name="daysWithoutCovid" value=""></td>
         </tr>
         <tr>
            <td>Email Address</td>
            <td><input type="text" name="email" value=""></td>
         </tr>
         <tr>
            <td>Password</td>
            <td><input type="password" name="pass" value=""></td>
         </tr>
         <tr>
            <td><input class="button" type="submit" value="SUBMIT"></td>
         </tr>
      </table>
   </form>
</div>