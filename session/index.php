<?php
    session_start(); //$_SESSION['nazwa'] = wartość;
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
        if (isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj') {
            $_SESSION['zalogowany'] = 0;
            echo 'zostałeś wylogowany koleżko';
            session_destroy();
        }else{
            if ((isset($_POST['login']) && isset($_POST['pass'])) || $_SESSION['zalogowany'] == 1) {

                if ((!empty($_POST['login']) && !empty($_POST['pass'])) || $_SESSION['zalogowany'] == 1  ) {
                    $user = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

                    if (($user === 'admin' ) || $_SESSION['zalogowany'] == 1 ) {
                        echo "<h1>Panel Administracyjny:</h1>";
                        echo "<ul>Opcje:";
                        foreach ($options as $option) {
                            echo "<li>";
                            echo "<a href=".$option['href'].">".$option['label']."</a>";
                            echo "</li>";
                        }
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
