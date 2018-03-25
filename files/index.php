<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_FILES</title>
</head>
<body>

    <form action="index.php" method="post" enctype="multipart/formdata">
        <div style="background: rgba(200, 30, 30, 0.75); padding: 10px; border: 2px solid black; border-radius: 4px;">
            <input type="hidden" name="MAX_FILE_SIZE" value="307200">
            <input type="file" name="plik">
            <input type="submit" value="Dodaj plik">
        </div>
    </form>

    <span>
        <?php

        if( isset($_FILES['plik']) ) {

            print_r($_FILES ['plik']);
            switch ($_FILES['plik']['error']){

                case 0:
                    break;
                case 1;
                    echo "za duzy plik";
                    break;
                case 2;
                    echo "za duzy pli";
                    break;
                case 3;
                    echo "niepelny plik";
                    break;
                case 4;
                    echo "nie wybrano pliku";
                default:
            }
        }
         ?>

    </span>

</body>
</html>
