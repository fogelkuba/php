<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klasy i dziedziczenie</title>
</head>
<body>
    <?php

    require_once('AnimalAbstract.php');
    require_once('Dog.php');

    $p = new Dog();
    $p->eat();
    $p->eat();


     ?>

</body>
</html>
