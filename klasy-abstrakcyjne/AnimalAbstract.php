<?php

abstract class AnimalAbstract{
    protected $isHungry;

    function __construct($isHungry = true){
        $this->isHungry = $isHungry;
    }

    abstract function eat();
}

 ?>
