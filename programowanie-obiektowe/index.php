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

    require('class.Time.php');

    // getCurrentTime();
    // getCurrentTime("H Y");
    // getFutureTime(6000);

    $a = new Time;
    $b = new Time;

    $a->getCurrentTime();
    $b->setFutureTime(20);


    ?>

</body>
</html>
