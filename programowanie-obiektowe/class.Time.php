<?php


class Time {
    const DEFAULT_TIME_ZONE = "Europe/Warsaw";
    public $currentTime;
    public $futureTime;

    function __construct(){
        date_default_timezone_set(DEFAULT_TIME_ZONE);
        $this->currentTime = $this->getCurrentTime();
    }

    function __tostring(){
        echo $this->currentTime;
    }

    function setFutureTime($days, $pattern = "H:i:s d M Y"){
        $this->futureTime = date($pattern, strtotime("+ $days days"))."<br>";
        echo $this->futureTime;
    }

    function getCurrentTime($pattern = "H:i:s d M Y"){
        echo date($pattern, time())."<br>";
    }

}

?>
