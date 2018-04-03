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

    // $host = 'localhost';
    // $user = 'root';
    // $password = 'root';
    // $database = 'kursmysql';
    // $port = '8888';
    //
    // $con = mysqli_connect( $host, $user, $password) || die(mysqli_error('blad laczenia'));
    // mysqli_select_db(mysqli_connect( $host, $user, $password), $database) or die(mysqli_error($con));
    // mysqli_query(mysqli_connect( $host, $user, $password), "
    //     CREATE TABLE klienci3
    //     (
    //         id INT UNSIGNED AUTO_INCREMENT,
    //         user VARCHAR(30) NOT NULL,
    //         pass VARCHAR(15) NOT NULL,
    //         imie VARCHAR(30) NOT NULL,
    //         PRIMARY KEY(id)
    //     )" or die(mysqli_error('blad tworzenia tabeli'))
    // );

    // echo 'no error';
    ?>

    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "kursmysql";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
