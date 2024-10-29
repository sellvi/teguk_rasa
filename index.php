<?php
session_start();

if($_SESSION['role'] != "admin"){
    echo "405 anda tidak berhak untuk masuk ke halaman ini";
    die();
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ini halaman admin</h1>

    <?php

        echo "id user : " . $_SESSION['id'] . "<br />";
        echo "username : " . $_SESSION['username'] . "<br />";
        echo "role : " . $_SESSION['role'] . "<br />";
    ?>

    <?php if(isset ($_SESSION['role'])) { ?>

        <?php echo $_SESSION['username'] ?>
        <a class="btn btn-danger" href="logout.php">logout</a>

    <?php } else { ?>

        <a class="btn btn-primary" href="login.php">login</a>
    
    <?php } ?>
</body>
</html>