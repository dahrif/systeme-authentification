
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
       
        include_once 'api/config/database.php';
        include_once 'api/objects/user.php';
        include_once 'api/users/login.php';
        session_start();
        if (isset($_POST['password'])){
            $email = $_SESSION['email'];
            $pass = $_SESSION['password'];
        }
        echo "hello $email";
        
        ?>
    </div>
</body>
</html>