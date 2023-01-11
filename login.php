<?php

session_start();
// include "db_connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);


if (empty($username)) {
    header("Location: index.php?error=Please input your username"); //index.php?
    exit();

} else if (empty($password)) {
    header("Location: index.php?error=Please input your password"); //index.php?

    exit();

}

if ($username === "admin" && $password === "admin") {
    header("Location: view_users.php");

} else {

    header("Location: index.php?error=Incorrect username or password"); //index.php?
    exit();
}

// $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) === 1) {
//     $row = mysqli_fetch_assoc($result);
//     if ($row['username'] === $username && $row['password'] === $password) {

//         echo "Greetings Admin!";
//         $_SESSION['username'] = $row['username'];
//         $_SESSION['password'] = $row['password'];
//         $_SESSION['id'] = $row['id'];
//         header("Location: home.php");
//         exit();
//     } else {

//         header("Location: index.html?erro=Incorrect username or password"); //index.php?
//     }

// } else {
//     header("Location: index.html");
//     exit();
// }