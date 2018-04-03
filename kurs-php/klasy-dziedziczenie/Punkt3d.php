<?php

class Punkt3d extends Punkt2d{

    public $z;

    public function __construct($x = 0, $y = 0, $z = 0){
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function setZ($z){
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }
}
 ?>
