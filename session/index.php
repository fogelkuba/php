<?php
    session_start(); //$_SESSION['nazwa'] = wartość;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_SESSION</title>
</head>
<body>

    <?php
        if ($_SESSION['zalogowany'] != 1) {
            include('login.php');
        }
    ?>

    <hr>
    <h2>

    <?php
        if (isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj') {
            $_SESSION['zalogowany'] = 0;
            echo 'zostałeś wylogowany koleżko';
            echo '<a href="index.php"> Wróć do strony głównej</a>';
            session_destroy();

        }else{
            if ((isset($_POST['login']) && isset($_POST['pass'])) || $_SESSION['zalogowany'] == 1) {

                if ((!empty($_POST['login']) && !empty($_POST['pass'])) || $_SESSION['zalogowany'] == 1  ) {
                    if ($_SESSION['zalogowany'] == 0) {
                        $user = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                        $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
                    }

                    if (($user === 'admin' ) || $_SESSION['zalogowany'] == 1 ) {
                        include('admin-panel.php');
                    }else{
                        echo "Witaj $user";
                    }

                }else{
                    echo "brak użytkownika! spróbuj ponownie";
                }
            }else{
                echo "brak użytkownika! spróbuj ponownie!";
            }
        }
     ?>
</h2>


</body>
</html>
