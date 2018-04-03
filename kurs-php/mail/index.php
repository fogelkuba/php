<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>mailing</h1>
    <?php
    return $content;
    $to = "fogelkuba@gmail.com";
    $subject = "WIADOMOŚĆ DNIA";
    $content = include 'mailing.php';

    $headers = "Content-Type: text/html; charset=UTF8 \r \n".
    "From:"."tests@tests.com.pl.eu"."\r \n".
    "Reply-to:"."support@support.pl"." \r \n";

    mail($to, $content, $treść, $headers);

     ?>
</body>
</html>
