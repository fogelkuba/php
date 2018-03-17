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
        require('login.php');
    }
 ?>

<hr>
<h2>

    <?php
        $options = array(
            0   =>  array(
                'href' => 'index.php',
                'label' => 'Odśwież'
            ),
            1 => array (
                'href' => 'index.php?akcja=wyloguj',
                'label' => 'Wyloguj'
            )
        );
    ?>

    <?php
        if (isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj') {
            $_SESSION['zalogowany'] = 0;
            echo 'zostałeś wylogowany koleżko';
            echo '<a href="index.php"> Wróć do strony głównej</a>';
            session_destroy();

        }else{
            if ((isset($_POST['login']) && isset($_POST['pass'])) || $_SESSION['zalogowany'] == 1) {

                if ((!empty($_POST['login']) && !empty($_POST['pass'])) || $_SESSION['zalogowany'] == 1  ) {
                    $user = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

                    if (($user === 'admin' ) || $_SESSION['zalogowany'] == 1 ) {
                        echo "<h1>Panel Administracyjny:</h1>";
                        echo "<ul><h3>Opcje:</h3>";

                        foreach ($options as $option) {
                            echo "<li>";
                                echo "<a href=".$option['href'].">".$option['label']."</a>";
                            echo "</li>";
                        };

                        echo "</ul>";
                        $_SESSION['zalogowany'] = 1;

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
