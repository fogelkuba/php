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
    )
?>

<h1>Panel Administracyjny:</h1>
<ul>
    <h3>Opcje:</h3>
<?php
    if (isset($_COOKIE['ref'])) {
        $ref = filter_var($_COOKIE['ref'], FILTER_SANITIZE_STRING);

        if ($ref == kazik) {
            echo "GRARULATCJE: UŻYCIE KUPONU";
        }
    }

    foreach ($options as $option) {
        echo "<li>";
            echo "<a href=".$option['href'].">".$option['label']."</a>";
        echo "</li>";
    }
 ?>

</ul>
