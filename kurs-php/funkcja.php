<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funkcja</title>
</head>
<body>
<?php
    $str1 = "Hello world!";
    $str2 = "Hello";

    function dlugosc($a){
        $strLen = strlen($a);
        echo $strLen."<br/>";
    };
    dlugosc($str1);
    dlugosc($str2);


    function getHigher($a, $b = 0){
        return ($a > $b) ? $a : $b;
    }
    echo getHigher(-15);

    $num = 10;
    function changeValue(&$valueToChange, $value){
        $valueToChange = $value;
    }

    changeValue($num, 100);
    echo $num;

     ?>
</body>
</html>
