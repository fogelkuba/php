<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

    require_once('Punkt.php');
    require_once('Punkt2d.php');

    $p = new Punkt(40);
    echo $p->x."<br>";
    $p2 = new Punkt2d(70);
    echo ($p2->x + $p2->y)."<br>";

    phpinfo();

    ?>

</body>
</html>
