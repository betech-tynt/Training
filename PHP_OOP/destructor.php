<?php
    class Example
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        public function __destruct()
        {
            echo "Name: {$this->name}.";
        }
    }

    $snake = new Example("Snake");
?>