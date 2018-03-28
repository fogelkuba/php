<?php

class Punkt {

    // public $x;
    protected $x;

    public function __construct($x = 0){
        $this->x = $x;
        // echo "parent constructor"."<br>";
    }

    public function getX(){
        return $this->x;
    }

    public function setX($x){
        if ($x > 50 || $x < 0) {
            echo "wartość poza zakresem";
        }else{
            $this->x = $x;
        }
    }
}
 ?>
