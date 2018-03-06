<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pętle Zagniezdzone </title>
    <style media="screen">
        body{
            font-family: 'Monaco', sans-serif;
        }
    </style>
</head>
<body>
    <h1>Pętle Zagniezdzone </h1>
    <?php

    function matrix($width = 10, $height = 10){
        echo "<table>";
        for ($i=1; $i <= $height; $i++) {
            echo"<tr>";
            for ($j=1; $j <= $width ; $j++) {
                $result = $i * $j;
                echo "<td>";
                echo $result;
                echo"</td>";
            }
            echo"</tr>";
        }
        echo "</table>";
    }
    matrix(5, 2)
     ?>
</body>
</html>
