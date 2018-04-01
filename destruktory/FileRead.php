<?php
    class FileRead {

        protected $filepointer;
        protected $filename;

        function __construct($filename){
            $this->filename = $filename;
            if (!($this->filepointer = @fopen($filename, "r"))) {
                echo " nie ma takiego pliku"."<br>";
            };
        }

        function getContent(){
            return fread($this->filepointer, filesize());
        }

    }
 ?>
