<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operatory Arytmentyczne</title>
</head>
<body>
    <?php
        $var1 = 10;
        $var2 = 5;

    echo "<h2> OPERACJE</h2>";

        echo $var1 + $var2;
        echo "<br>";
        echo $var1 - $var2;
        echo "<br>";
        echo $var1 * $var2;
        echo "<br>";
        echo $var1 / $var2;
        echo "<br>";
        echo $var1 % $var2;
        echo "<br>";
        $var1 += 2; // $var1 = $var1 + 2;
        echo $var1;
        echo "<br>";
        $var1 *= 2; // $var1 = $var1 * 2;
        echo $var1;
        echo "<br>";


    echo "<h2> inkrementacja</h2>";
        $i = 5;
        echo $i; echo "<br>";
        $i = $i + 1;
        echo $i; echo "<br>";
        $i += 1;




     ?>
</body>
</html>
