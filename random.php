<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random </title>
    <style media="screen">
        body{
            font-family: 'Monaco', sans-serif;
        }
    </style>
</head>
<body>
    <h1>Random quote</h1>
    <?php

    $quotes = [
        ["Stay Hungry. Stay Foolish.", "Steve Jobs"],
        ["Good Artists Copy, Great Artists Steal.", "Pablo Picasso"],
        ["Argue with idiots, and you become an idiot.", "Paul Graham"],
        ["Be yourself; everyone else is already taken.", "Oscar Wilde"],
        ["Simplicity is the ultimate sophistication.", "Leonardo Da Vinci"]
    ];

    $rand = rand(0, count($quotes)-1);
    echo"<h3>".$quotes[$rand][0]."</h3>";
    echo"<span>".$quotes[$rand][1]."</span>";

    ?>
</body>


</html>
