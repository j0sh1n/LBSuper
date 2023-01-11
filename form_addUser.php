<?php
include("nav.html");

?>
<div class="form-container">
   <form method="post" action="action_addUser.php">
      <table class="form" border="0" width="500">
         <tr>
            <th colspan="2">Register a User</th>
         </tr>
         <tr>
            <td>First Name</td>
            <td><input type="text" name="fname"></td>
         </tr>
         <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname"></td>
         </tr>
         <tr>
            <td>Gender</td>
            <td><input type="text" name="gender"></td>
         </tr>
         <tr>
            <td>Address</td>
            <td><input type="text" name="address"></td>
         </tr>
         <tr>
            <td>COVID Status</td>
            <td><input type="text" name="covStat" value="NEGATIVE" readonly></td>
         </tr>
         <tr>
            <td>Company</td>
            <td><input type="text" name="company"></td>
         </tr>
         <tr>
            <td>Employment</td>
            <td><input type="text" name="employment"></td>
         </tr>
         <tr>
            <td>Email Address</td>
            <td><input type="text" name="email"></td>
         </tr>
         <tr>
            <td>New Password</td>
            <td><input type="password" name="pass"></td>
         </tr>
         <tr>
            <td><input class="button" type="submit" value="SUBMIT"></td>
         </tr>
      </table>
   </form>
</div>