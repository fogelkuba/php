<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    echo "<h1>Wstęp</h1>";
    $br = "<br><br>";
    $width = 4;
    echo $width;
    echo $br;


    /*
        - nie uzywamy polskich znakow
        - nie uzywac spacji
        - nie wolno zaczynac nazyw zmiennej od cyfry

        int - integer - liczba calkowita

    */

    var_dump($width);
    echo $br;
    /*
        var_dump - wyrzuca typ zmiennej
    */

    $text = "przykładowy tekst opisowy";
    echo $text;
    // echo $text(1); not working
    echo $br;

    var_dump($text);
    echo $br;

    echo "szerokość tekstu wynosi $width";
    // podwójne "" - zwracaja zmienna
    echo $br;

    echo 'szerokość tekstu wynosi $width';
    // pojedyńcze '' - zwracają stringr
    echo $br;

    echo "aby stworzyć zmienną w php używamy konstrukcji: \$nazwa_zmiennej".$width;
    echo $br;

    echo ord('1')."<br>";
    echo chr(49);

    echo "<h2>Zmienne zmiennoprzecinkowe</h2>";
    $zmienna_zmiennoprzecinkowa = 4.9;
    echo $zmienna_zmiennoprzecinkowa."<br>";
    var_dump($zmienna_zmiennoprzecinkowa)."<br>";
    echo (int) $zmienna_zmiennoprzecinkowa."<br>";
    echo round ($zmienna_zmiennoprzecinkowa, 0);
    echo $br;

    echo "<h2>Boolean</h2>";
    $check = true;
    echo $check;
    // true zwraca wartość '1'
    $checkFalse = false;
    echo $checkFalse;
    // false nie zwraca nic

    echo "<h2>Define</h2>";
    define (nazwa,'Far Cry');
    echo nazwa;
    // wartości define nie mozna nadpisać

?>
</html>
