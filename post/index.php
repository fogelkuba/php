<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>

<?php
    echo 'formularz:';
 ?>
    <form action="odbierz.php" method="post" enctype="multipart/formdata">
        <div>
            <div>
                <p>login: </p>
                <input type="text" name="login" maxlength="8" size="20">
            </div>
            <div>
                <p>pass: </p>
                <input type="password" name="pass" maxlength="15" size="20">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </div>
    </form>

</body>
</html>
