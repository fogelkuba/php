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
    foreach ($options as $option) {
        echo "<li>";
            echo "<a href=".$option['href'].">".$option['label']."</a>";
        echo "</li>";
    };

    $_SESSION['zalogowany'] = 1;
 ?>

</ul>
