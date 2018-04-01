<?php
    class FileRead {

        protected $filepointer;
        protected $filename;

        function __construct($filename)
        {

            $this->filename = $filename;

            if (!($this->filepointer = @fopen($filename, "r")))
            {
                throw new Exception( ['nie ma takiego pliku', $code, $previous]);
            }
        }

        function getContent()
        {
            return fread($this->filepointer, filesize($this->filename));
        }

    }
 ?>
