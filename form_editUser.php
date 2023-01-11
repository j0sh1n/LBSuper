<?php
include("config.php");
include("firebaseRDB.php");
include("nav.html");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("Users/$id");
$data = json_decode($retrieve, 1);

?>
<div class="form-container">
   <form method="post" action="action_addUser.php">
      <table class="form">
         <tr>
            <th colspan="2">Edit User</th>
         </tr>
         <tr>
            <td>First Name</td>
            <td><input type="text" name="fname" value=""></td>
         </tr>
         <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname" value=""></td>
         </tr>
         <tr>
            <td>Gender</td>
            <td><input type="text" name="gender" value=""></td>
         </tr>
         <tr>
            <td>Address</td>
            <td><input type="text" name="address" value=""></td>
         </tr>
         <tr>
            <td>COVID Status</td>
            <td><input type="text" name="covStat" value=""></td>
         </tr>
         <tr>
            <td>Company</td>
            <td><input type="text" name="company" value=""></td>
         </tr>
         <tr>
            <td>Employment</td>
            <td><input type="text" name="employment" value=""></td>
         </tr>
         <tr>
            <td>Email Address</td>
            <td><input type="text" name="email" value=""></td>
         </tr>
         <tr>
            <td>New Password</td>
            <td><input type="password" name="pass" value=""></td>
         </tr>
         <tr>
            <td><input class="button" type="submit" value="SUBMIT"></td>
         </tr>
      </table>
   </form>
</div>