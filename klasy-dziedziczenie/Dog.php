<?php

class Dog extends AnimalAbstract{
    protected $isHungry;
    function __construct($isHungry = true){
        $this.isHungry = $isHungry;
    }
    function eat(){

    }
}

 ?>
