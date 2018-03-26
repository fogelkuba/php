<?php

class Dog extends AnimalAbstract{
    protected $isHungry;
    function __construct($isHungry = true){
        $this->isHungry = $isHungry;
    }
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
