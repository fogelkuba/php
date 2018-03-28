<?php

class Punkt2d extends Punkt {
    public $x;
    public $y;

    public function __construct($x = 0, $y=20){

        parent::__construct($x =0);
        $this->y = $y;
    }
}

 ?>
