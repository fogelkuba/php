<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operatory Porównania</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 10;
        $c = 15;
        $d = "10";

    echo "<h2> Operatory Porównania </h2>";


    echo $a == $b;
    echo "<br />";

    var_dump($a == $c);
    echo "<br />";
    var_dump($c != $b);
    echo "<br />";
    var_dump($d <> $b);
    echo "<br />";
    var_dump($a == $d);
    echo "<br />";
    var_dump($a === $d);
    echo "<br />";


     ?>
</body>
</html>
