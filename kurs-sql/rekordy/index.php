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

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_select_db($conn, 'klienci');
    mysqli_set_charset($conn, 'utf8');

    $query = "
        INSERT INTO klienci
        (name, surname, age)

        VALUE
        ('test', 'test', 12)
    ";
    mysqli_query($query) or die(mysqli_error($con));


    mysqli_close($conn);
?>
</body>
</html>
