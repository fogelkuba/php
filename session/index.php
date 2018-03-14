<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_SESSION</title>
</head>
<body>

<?php
    echo 'Logowanie:';
 ?>
    <form action="index.php" method="post" enctype="multipart/formdata">
        <div>
            <br>
            <div>
                <span>login: </span>
                <input type="text" name="login" maxlength="15" size="20">
            </div>
            <br>
            <div>
                <span>pass: </span>
                <input type="password" name="pass" maxlength="15" size="20">
            </div>
            <br>
            <div>
                <input type="submit" value="Login">
                <br>
                <br>
            </div>
        </div>
    </form>
<hr>
<h2>
    <?php
        if (isset($_POST['login']) && isset($_POST['pass'])) {

            if (!empty($_POST['login']) && !empty($_POST['pass'])) {
                $user = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

                if ($user === 'kubu' ) {
                    echo 'witaj kubu supermistrzu';
                }else{
                    echo "Witaj $user";

                }

            }else{
                echo "brak użytkownika! spróbuj ponownie";
            }
        }else{
            echo "brak użytkownika! spróbuj ponownie!";
        }
     ?>
</h2>


</body>
</html>
