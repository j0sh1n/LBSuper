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
   <title>User Information</title>
</head>

<body>
   <div class="main-container">
      <a href="form_addUser.php" class="button add">REGISTER A USER</a>


         <table class="table" id="table">
            <tr>

               <th>First Name</th>
               <th>Last Name</th>
               <th>Gender</th>
               <th>Address</th>
               <th>COVID Status</th>
               <th>Company</th>
               <th>Employment</th>
               <th>Email Address</th>
               <th>Password</th>
               <th colspan="2">Actions</th>
            </tr>

            <?php
            $data = $db->retrieve("Users");
            $data = json_decode($data, 1);

            if (is_array($data)) {
               foreach ($data as $id => $Users) {
                  echo "<tr>
                           <td>{$Users['fname']}</td>
                           <td>{$Users['lname']}</td>
                           <td>{$Users['gender']}</td> 
                           <td>{$Users['address']}</td>
                           <td>{$Users['covStat']}</td>
                           <td>{$Users['company']}</td>
                           <td>{$Users['employment']}</td>
                           <td>{$Users['email']}</td>
                           <td>{$Users['pass']}</td>
                           <td><a class='button' href='form_editUser.php?id=$id'>EDIT</a></td>
                           <td><a class='button' href='action_deleteUser.php?id=$id'>DELETE</a></td>
                        </tr>";
               }
            }

            ?>
         </table>
         <br>
         <br>

   </div>
</body>