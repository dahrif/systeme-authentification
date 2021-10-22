<?php 
session_start();


if (!isset($_SESSION['username'])){
header("location: ../../login.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
</head>
<body>
    
    <?php
    
     echo "<div class='text-center user'><h3>Coucou <span class='username'>" .$_SESSION['username']. "</span> </h3> <a class='btn btn-danger' href='logout.php'>Deconnection</a></div>";

     ?>

</body>
</html>