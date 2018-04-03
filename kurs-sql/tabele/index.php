<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabele</title>
</head>
<body>
    <?php

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'kursmysql';
    $port = '8888';

    $con = mysqli_connect( $host, $user, $password) || die(mysql_error('blad laczenia'));
    mysqli_select_db($con, $database) or die(mysqli_error($con));

    ?>
</body>
</html>
