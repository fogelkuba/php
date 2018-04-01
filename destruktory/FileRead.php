<?php
    class FileRead {

        protected $filepointer;

        function __construct($filename){
            $this->filepointer = @fopen($filename, "r");
        }

    }
 ?>
