<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tablice</title>
</head>
<body>
    <?php
        $tab[0] = "zero";
        $tab[1] = 10;
        $tab[2] = 20;
        $tab[3] = 30;
        $tab[4] = 40;
        echo $tab.":"."<br>";
        echo $tab[0];
        echo $tab[1];
        echo $tab[2];
        echo $tab[3];
        echo $tab[4];

        $tab[] = 50;
        echo $tab[5];

        echo "<h2> print_r($tab) </h2>";
        print_r($tab);
        echo "<p> drukuje zawartość tablicy </p>";

     ?>

</body>
</html>
