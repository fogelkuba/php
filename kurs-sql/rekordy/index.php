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
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "kursmysql";

    // Create conection
    $con = mysqli_connect($servername, $username, $password, $dbname);
    // Check conection
    if (!$con) {
        die("conection failed: " . mysqli_connect_error());
    }

    mysqli_select_db($con, 'klienci');
    mysqli_set_charset($con, 'utf8');

    $query = "
        INSERT INTO klienci
        (name, surname, age)

        VALUES
        ('test2', 'test2', 22)
    ";
    mysqli_query($con, $query) or die(mysqli_error($con));


    mysqli_close($con);
?>
</body>
</html>
