<?php

date_default_timezone_set("Europe/Warsaw");

class Time {
    public $currentTime;
    public $futureTime;

    function setFutureTime($days, $pattern = "H:i:s d M Y"){
        $this->futureTime = date($pattern, strtotime("+ $days days"))."<br>";
        echo $this->futureTime;
    }

    function getCurrentTime($pattern = "H:i:s d M Y"){
        echo date($pattern, time())."<br>";
    }

}

?>
