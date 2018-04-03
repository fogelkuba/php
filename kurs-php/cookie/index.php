<?php
// start sesji
    session_start();
    //$_SESSION['nazwa'] = wartość;

    if (isset($_GET['ref'])) {
        $ref = filter_var($_GET['ref'], FILTER_SANITIZE_STRING);

        if (!isset ($_COOKIE['ref'])) {
            setcookie("ref", $ref, time()+60*60*24*30);
        };
    };

    if (!isset($_SESSION['initiate'])) {

        session_regenerate_id();
        $new_session_id = session_id();
        session_write_close();
        session_id($new_session_id);
        session_start();

        $_SESSION['initiate'] = 1;
    }

    ob_start();
?>




<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_COOKIE</title>
</head>
<body>


    <div style="opacity: 0.3">
        <?php
            //sprawdzanie wersji komputera
            echo $_SERVER['HTTP_USER_AGENT'];
            echo time();
        ?>
        <hr>
    </div>

    <?php
    // logout
        if (isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj') {
            $_SESSION['zalogowany'] = 0;
            echo 'zostałeś wylogowany koleżko';
            // echo '<a href="index.php"> Wróć do strony głównej</a>';
            session_destroy();
        }
    ?>

    <?php
    // wyświetlanie formularza logowania
        if ($_SESSION['zalogowany'] == 0) {
            include('login.php');
        }
     ?>

    <?php
        if ( $_SESSION['zalogowany'] == 1 && (time() - $_SESSION['time']) > 10 * 60) {
            $_SESSION['zalogowany'] = 0;
            session_destroy();
            echo "Sesja zakończona z powodu braku aktywności.";
        }
        if ($_SESSION['zalogowany'] == 1 && ($_SESSION['info'] != $_SERVER['HTTP_USER_AGENT'])) {
            session_destroy();
            echo "Sesja zakończona z powodu bŁędu.";
        }


        if ((isset($_POST['login']) && isset($_POST['pass'])) || $_SESSION['zalogowany'] == 1) {

            if ((!empty($_POST['login']) && !empty($_POST['pass'])) || $_SESSION['zalogowany'] == 1  ) {

                if ($_SESSION['zalogowany'] == 0) {

                    $user = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
                };

                if (($user === 'admin' ) || $_SESSION['zalogowany'] == 1 ) {

                    if ($_SESSION['zalogowany'] == 0) {
                        $_SESSION['login'] = $login;
                    }

                    echo 'witaj'.$user;
                    include('admin-panel.php');

                    $_SESSION['zalogowany'] = 1;
                    $_SESSION['time'] = time();
                    $_SESSION['info'] = $_SERVER['HTTP_USER_AGENT'];

                }else{
                    echo "Witaj $user";

                    echo "<a href='index.php?akcja=wyloguj'>Wyloguj</a>";
                };

            }else{
                echo "brak użytkownika! spróbuj ponownie";
            }
        }else{
            // echo "brak użytkownika! spróbuj ponownie!";
        }

        ob_end_flush();
     ?>

</body>
</html>
