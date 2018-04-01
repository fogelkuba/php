<?php
    class FileRead {

        function __construct($filename){
            $wsk = @fopen($filename, "r");
        }

    }
 ?>
