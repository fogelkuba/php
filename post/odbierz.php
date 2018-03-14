<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST LOGOWANIE</title>
</head>
<body>

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
                echo "brak użytkownika! spróbuj ponownie <a href='/php/post'>tutaj</a>";
            }
        }else{
            echo "brak użytkownika! spróbuj ponownie <a href='/php/post'>tutaj</a>";
        }
     ?>
    </h2>
</body>
</html>
