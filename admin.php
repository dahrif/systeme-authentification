<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: api/Users/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title class="wlcm">Welcome</title>
</head>
<body>
    
    <?php echo "<div class='text-center'><h3>hello $email </h3> <a class='btn btn-danger' href='logout.php'>Log out</a></div>";?>
</body>
</html>