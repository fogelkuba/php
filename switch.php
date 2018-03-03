<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instrukcje Warunkowe Switch</title>
</head>
<body>
    <?php
    echo "<h1>Instrukcje Warunkowe Switch</h1>";

        $a = 5;

        switch($a){
            case 0:
                echo "a jest równe 0";
                break;
            case 5:
                echo "a jest równe 5";
                break;
            case 15:
                echo "a jest równe 15";
                break;
            default:
                echo "wartość a nie pasuje";
        }

     ?>
</body>
</html>
