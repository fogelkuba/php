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
    require_once('Punkt3d.php');

    // $p = new Punkt2d(22, 33);
    // echo $p->x."<br>";

    // $p2 = new Punkt2d(70);
    // echo ($p2->x + $p2->y)."<br>";

    $p = new Punkt2d(22, 33);
    $p->setX(15);
    echo $p->getX();

    // phpinfo();

    ?>

</body>
</html>
