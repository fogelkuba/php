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
        wymaga stworzeonego pliku

    */
    $noFile = "Nie ma takiego pliku";
    $file = 'test.txt';
    $cursor = @fopen($file, "r+");

    if ($cursor) {
        $content = fread($cursor, filesize($file));
        echo $content;
    }else{
        echo $noFile;
    }

    fclose($cursor);

     ?>

</body>
</html>
