<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operacje na plikach</title>
</head>
<body>
    <h1>Operacje na plikach</h1>

    <?php

    /*file
    $cursor = fopen("nazwaPliku.txt", "TRYB OTWARCIA");

    r - read - otwiera plk do odczytu- ustanawoa wskaznik na poczatku pliku.
        wymaga stworzeonego pliku;
    r+ - pozwala dodatkowo zapiasywać;

    w - czyści plik na starcie, tworzy go jeśli nie ma, zapisuje;

    a - wskaźnik na koncu pliku! - tworzy plik

    */
    $noFile = "Nie ma takiego pliku";
    $file = 'test.txt';
    $cursor = @fopen($file, "r+");

    if ($cursor) {
        // $content = fread($cursor, filesize($file));
        // fwrite($cursor, 'ble ');
        // echo $content;

//LICZNIK
    $counter = (int)fread($cursor, filesize($file));
    $counter++;

    rewind($cursor);
    fwrite($cursor, $counter);

    }else{
        echo $noFile;
    }

    fclose($cursor);

     ?>

</body>
</html>
