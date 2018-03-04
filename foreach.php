<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pętle Foreach </title>
</head>
<body>
    <h1>Pętle Foreach </h1>
    <?php
    
    echo "<h3> For </h3>";

    echo "<ul>";

        for ($i = 0; $i < 10; $i++ ){
            // echo "$i"."<br/>";
            $tab[$i] = $i."hello";
            echo "<li> element list $i </li>";
        };


    echo"</ul>";

    echo "<pre>";
    print_r($tab);
    echo count($tab);
    echo "</pre>";


    echo "<h3> Foreach </h3>";
    foreach ($tab as $key => $value) {
        echo "<pre>";
        echo $key.$value."<br/>";
        echo "</pre>";
    }

     ?>
</body>
</html>
