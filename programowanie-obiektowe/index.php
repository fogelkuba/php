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
    date_default_timezone_set("Europe/Warsaw");


    function getCurrentTime($pattern = "H:i:s d M Y"){
        echo date($pattern, time())."<br>";
    };

    function getFutureTime($days, $pattern = "H:i:s d M Y"){
        echo date($pattern, strtotime("+ $days days"))."<br>";
    };

    getCurrentTime();
    getCurrentTime("H Y");

    getFutureTime(6000);



     ?>

</body>
</html>
