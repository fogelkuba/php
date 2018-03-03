<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operatory Logiczne</title>
</head>
<body>
    <?php


    echo "<h2> Operatory Logiczne </h2>";

    $a = true;
    $b= false;
//======================================================================
    echo "OR";
    //alternatywa or ||
    var_dump($a OR $b);
    echo "<br>";

//======================================================================
    //koniunkcja and &&
    //czy oba sa prawdziwe to true
    var_dump($a and $b);
    echo "<br>";

    echo "AND";
    var_dump((5 < 7) AND (1 >= 1));
    echo "<br>";
//======================================================================
    var_dump((5 < 7) && (1 >= 1));
    echo "<br>";

    echo "XOR";
    // XOR wylaczna alternatywa
    var_dump(!((5 < 7) XOR (1 > 1)));
    echo "<br>";

     ?>
</body>
</html>
