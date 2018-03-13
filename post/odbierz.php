<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/php/post">Back</a>
    <h2>
    <?php
        // echo $_POST['login'];

        if (isset($_POST['login']) && isset($_POST['pass'])) {
            echo 'witaj '.$_POST['login'];
        }else{
            echo 'brak użytkownika';
        }
     ?>
    </h2>
</body>
</html>
