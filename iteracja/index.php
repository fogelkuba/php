<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iteracja</title>
</head>
<body>

<?php

class A implements Iterator
{
    public $a = 'one';
    protected $b = 'two';
    private $c = 'three';
}

$a = new A();

foreach($a as $key => $value){
    echo "key=".$key."<br>";
    echo "value=".$value."<br>"."<br>";
}


?>
</body>
</html>
