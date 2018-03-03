<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instrukcje Warunkowe</title>
</head>
<body>
    <?php
    echo "<h1>Instrukcje Warunkowe</h1>";

        $a = 5;
        $b = 10;

        if ($a > $b){
            echo "a jest wieksze od b";
        }else if ($a < $b){
            echo "a jest mniejsze od b";
        }else{
            echo "a jest równe b";
        }


     ?>
</body>
</html>
