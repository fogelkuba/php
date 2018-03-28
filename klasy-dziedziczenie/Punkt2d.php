<?php

class Punkt2d extends Punkt {
    public $x;
    public $y;

    public function __construct($x = 10, $y=20){

        parent::__construct(25);
        $this->y = $y;
    }
}

 ?>
