<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destruktowy - Obsługa błędów</title>
</head>
<body>
    <h1>Destruktory</h1>
    <?php
        require_once("FileRead.php");
        echo 'test';

        try
        {
            $reader = new FileRead('test.txt');
            $reader->getContent();
        }
        catch(Exception $e){
            echo $e->getMessage();
            // echo $e->getLine();
        }
        echo 'end';
    ?>
</body>
</html>
