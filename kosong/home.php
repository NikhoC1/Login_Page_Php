<?php

    session_start();

    if (isset($_SESSION['idLogin']) && isset($_SESSION['email'])) {
        die(header("Location: home.php"));
    }
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hellow wir,
        <?php echo $_SESSION['email'] ?>
    </h1>

    <a href="logout.php">Logout</a>
</body>

</html>