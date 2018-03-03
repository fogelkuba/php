<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operatory Bitowe</title>
</head>
<body>
    <?php


    echo "<h2> Operatory Bitowe </h2>";

    $a = true;
    $b= false;
    echo "<br>";


    // 0010 = 2
    // 1010 = 10

    // and - koniunkcja
    echo (2 & 10)."<br/>";


    // or - alternatywa
    echo (2 | 10)."<br/>";

    // Xor - exclusive alternative
    echo (2 ^ 10)."<br/>";

    // not - zaprzeczenie
    echo (~10)."<br/>";

    // przesuniecia bitowe
    echo (5 >> 1)."<br>";
     ?>
</body>
</html>
