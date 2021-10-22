<?php 
session_start();


if (!isset($_SESSION['username'])){
header("location: login.php");
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
     echo "<div class='text-center'><h3>hello" .$_SESSION['username']. "</h3> <a class='btn btn-danger' href='logout.php'>Deconnection</a></div>";
     ?>

</body>
</html>