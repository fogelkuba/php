<?php #$connector = PhpConsole\Connector::getInstance(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statyczne Funkcje</title>
</head>
<body>
    <h1>Statyczne Funkcje</h1>

<?php
    require_once('Guest.php');
    require_once('User.php');
    require_once('Moderator.php');
    require_once('Admin.php');

    $g = new Guest();
    $u = new User();
    $m= new Moderator();
    $a= new Admin();

    echo var_dump(Guest::checkPermission($g->getPermission(), PermissionsInterface::READ_POST)).'<br>';
    echo var_dump(Guest::checkPermission($u->getPermission(), PermissionsInterface::WRITE_POST)).'<br>';

    echo 'test'.'<br>';

  ?>

</body>
</html>
