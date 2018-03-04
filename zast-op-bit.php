<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zastosowanie Operatorów Bitowych</title>
</head>
<body>
    <h1>Zastosowanie Operatorów Bitowych</h1>
<?php

    // 0 0 0 0 1 - czytanie
    $readPost = 1;
    // 0 0 0 1 0 - pisanie
    $writePost = 2;
    // 0 0 0 1 1 - czytanie i pisanie

    // 0 0 1 0 0 - usuwanie postu
    $delatePost = 4;
    // 0 1 0 0 0 - usuwanie usera
    $delateUser = 8;

//user permissions
    $guest = $readPost;
    $user = $readPost | $writePost;
    $moderator = $readPost | $writePost | $delatePost;
    $admin = $readPost | $writePost | $delatePost | $delateUser;




     ?>
</body>
</html>
