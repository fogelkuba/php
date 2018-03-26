<?php
require_once('AnimalAbstract.php');

class Dog extends AnimalAbstract{
    protected $isHungry;

    function eat(){
        if ($isHungry == 'true') {
            echo "eating"."<br>";
            $this->isHungry = false;
        }else{
            echo "i'm not hungry"."<br>";
        }
    }
}

 ?>
