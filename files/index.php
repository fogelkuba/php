<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_FILES</title>
</head>
<body>

    <form class="" action="index.php" method="post" enctype="multipart/formdata">
        <div class="">
            <input type="hidden" name="MAX_FILE_SIZE" value="30720">
            <input type="file" name="plik" >
            <input type="submit" value="Dodaj plik">
        </div>
    </form>

</body>
</html>
