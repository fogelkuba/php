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
    echo 'formularz:';
 ?>
    <form action="index.php" method="post" enctype="multipart/formdata">
        <div>
            <div>
                <p>login: </p>
                <input type="text" name="login" maxlength="15" size="20">
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
                echo "<br/>"."<a href='/php/post'>back</a>";
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
