<?php 

require_once ('api/config/database.php');
require_once ('api/objects/user.php');
require_once ('api/Users/login.php');

session_start();

if (isset($_POST['submit'])){
    $username = $_SESSION['username'];
    $pass = $_SESSION['password'];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Title</title>
</head>
<body>
    
    <?php
     echo "<div class='text-center'><h3>hello $username </h3> <a class='btn btn-danger' href='api/Users/logout.php'>Deconnection</a></div>";
     ?>
</body>
</html>