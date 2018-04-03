<?php
require_once('AnimalAbstract.php');

class Dog extends AnimalAbstract{
    protected $isHungry;

    function eat(){

        if ($this->isHungry) {
            echo "eating"."<br>";
            $this->isHungry = false;

        }else{
            echo "i'm not hungry"."<br>";
        }
    }
}

 ?>
