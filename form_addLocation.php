<?php
include("nav.html");

?>
<div class="form-container">
   <form method="post" action="action_addLocation.php">
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
            <td><input type="text" name="date" value="<?php echo date("m/d/Y"); ?>" readonly></td>
         </tr>
         <tr>
            <td>Number of current checked in</td>
            <td><input type="text" name="checkIns" value="0" readonly></td>
         </tr>

         <tr>
            <td>COVID presence</td>
            <td><input type="text" name="daysWithoutCovid" value="0" readonly></td>
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