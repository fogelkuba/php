<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start</title>
</head>
<body>

<?php


    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'kursmysql';
    $port = '8888';
    $socket = '';
    $mySqlConnection = mysqli_connect( $host, $user, $password, $database, $port) || die(mysql_error());
    // $mySqlConnection;

    if (!$mySqlConnection) {
        die('nie udało się nawiązać połączenia z baza danych');
        echo "exit";
    }


    // mysqli_select_db('kursmysql') or die(mysql_error());
    // mysqli_close($mySqlConnection);

?>

<pre>
    <?php var_dump($mySqlConnection); ?>
</pre>

</body>
</html>
