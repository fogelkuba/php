<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pobieranie Danych</title>
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


    // $query = "
    //     DELETE FROM klienci
    //     WHERE
    //     login = '' AND pass = ''
    // ";

    // $query = "
    //     UPDATE klienci SET name = 'ana' WHERE  login = 'Szymon'
    //     ";

    $var = '';

    $query = "
        SELECT * FROM klienci
    ";


    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    // print_r ($result)."<br><br>";
    // echo mysqli_num_rows($result);

    if(mysqli_num_rows($result) > 0 ){
        echo 'ilośc wyników: '.mysqli_num_rows($result);
    }else{
        echo 'brak rezultatów';
    }
?>

<pre>
<?php //print_r( mysqli_fetch_array($result, MYSQLI_ASSOC)); ?>
<?php //print_r( mysqli_fetch_array($result, MYSQLI_ASSOC)); ?>
<?php //print_r( mysqli_fetch_array($result, MYSQLI_ASSOC)); ?>
<?php //print_r( mysqli_fetch_array($result, MYSQLI_ASSOC)); ?>
<?php //print_r( mysqli_fetch_array($result, MYSQLI_ASSOC)); ?>

<?php //print_r( mysqli_fetch_array($result, MYSQLI_NUM)); ?>
<?php //print_r( mysqli_fetch_array($result, MYSQLI_BOTH)); ?>

<?php


for ($i=0; $i < mysqli_num_rows($result); $i++) {
    $row = mysqli_fetch_assoc($result);
    echo "<table border='1' cellspacing='0' style='float: left; margin 10px'>";
    foreach($row as $key => $value)
    {
        echo "<tr><td>".$key.$value."</td></tr>";
    }
    echo "</table>";
} ;
?>

</pre>


<?php
    mysqli_close($con);
?>
</body>
</html>
