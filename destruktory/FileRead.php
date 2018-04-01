<?php
    class FileRead {

        protected $filepointer;
        protected $filename;
        protected $isFileOpen = true;

        function __construct($filename)
        {
            $this->filename = $filename;

            if (!($this->filepointer = @fopen($filename, "r")))
            {
                $this->isFileOpen = false;
                throw new Exception( 'nie ma takiego pliku' );
            }
        }

        function __destruct()
        {
            if ($this->isFileOpen) {
                echo 'destruct';
                fclose($this->filepointer);
            }
        }

        function getContent()
        {
            echo fread($this->filepointer, filesize($this->filename));
            echo "<br>"; echo "<br>";
        }

    }
 ?>
