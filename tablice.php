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
        echo "<pre>";
        print_r($tab);
        echo "</pre>";
        print_r($tab);
        echo "<p> drukuje zawartość tablicy </p>";


        echo "<h2> Tablica asocjacyjna</h2>";
        echo "<p> jako klucz mozna podac string - analogicznie jak w objekcie w js </p>";
        echo "<p> \$man[\"name\"] = \"Jay\";</p>";
        $man["name"] = "Jay";
        $man["lastName"] = "eff";
        echo "<pre>";
        print_r($man);
        echo "</pre>";

    echo "<h2> tablica deklarowana 'inline' </h2>";
        echo '$man2 = array(4,5,6,7,6,2,5,3,3);';
        $man2 = array(4,5,6,7,6,2,5,3,3);
        echo "<pre>";
        print_r($man2);
        echo "</pre>";

    echo "<h2> tablica 2-wymiarowa </h2>";
        $people[0]['name'] = "John";
        $people[0]['lastName'] = "Newman";

        $people[1]['name'] = "Gary";
        $people[1]['lastName'] = "Oldman";

        $people[2]['name'] = "Tommy";
        $people[2]['lastName'] = "Badman";

        echo "<pre>";
        print_r($people);
        echo "</pre>";
     ?>

</body>
</html>
