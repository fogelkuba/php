<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1</title>
</head>
<?php
    // komentarze
    $title = "php";
    $number = 5;
    echo "<p>Zmienne</p>";
    echo "hello".$title ;
    echo "<br>";

    var_dump($title);
    echo "<br>";

    var_dump($number);

    echo "szerokość wynosi $number";
    echo "<br>";

    echo 'szerokość wynosi $number';
    echo "<br>";

    echo 'szerokość wynosi \$number';
    echo "<br>";

    echo ord('1');
    echo "<br>";

    echo chr('49');

    $floatVar = 4.3;
    echo "<br>";

    var_dump($floatVar);
    echo "<br>";

    echo (int)($floatVar);
    echo "<br>";

    echo (float)($floatVar);
    echo "<br>";

    echo round($floatVar);
    echo "<br>";

    var_dump('hello there guys!');
    echo "<br>";

    $var = "moja nowa zmienna";
     echo $var;
    echo $var(1);

    define("NAZWA", "heros");
    echo NAZWA;

 ?>