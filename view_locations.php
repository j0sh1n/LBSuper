<?php
include("config.php");
include("firebaseRDB.php");
include("nav.html");


$db = new firebaseRDB($databaseURL);
?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="style.css">
   <title>Registered Locations</title>
</head>

<body>
   <div class="main-container">

      <a href="form_addLocation.php" class="button add">REGISTER A LOCATION</a>

      <div class="main">
         <table class="table" id="table">
            <tr>
               <th>Establishment Name</th>
               <th>Address</th>
               <th>Check In</th>
               <th>Date Created</th>
               <th>Days without COVID</th>
               <th>Email Address</th>
               <th>Password</th>
               <th colspan="2">Action</th>
            </tr>

            <?php
            $data = $db->retrieve("Management");
            $data = json_decode($data, 1);

            if (is_array($data)) {
               foreach ($data as $id => $Management) {
                  echo "<tr>
                           <td>{$Management['name']}</td>
                           <td>{$Management['address']}</td>
                           <td>{$Management['checkIns']}</td> 
                           <td>{$Management['date']}</td>
                           <td>{$Management['daysWithoutCovid']}</td>
                           <td>{$Management['email']}</td>
                           <td>{$Management['pass']}</td>
                           <td><a class='button' href='form_editLocation.php?id=$id'>EDIT</a></td>
                           <td><a class='button' href='action_deleteLocation.php?id=$id'>DELETE</a></td>
                        </tr>";
               }
            }
            ?>
         </table>
         </br>
         </br>
      </div>
   </div>
</body>