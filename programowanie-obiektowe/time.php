<?php

date_default_timezone_set("Europe/Warsaw");

function getCurrentTime($pattern = "H:i:s d M Y"){
    echo date($pattern, time())."<br>";
};

function getFutureTime($days, $pattern = "H:i:s d M Y"){
    echo date($pattern, strtotime("+ $days days"))."<br>";
};

?>
