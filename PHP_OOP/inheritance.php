<?php
    class Animal
    {
        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro()
        {
            echo "The Animal is {$this->name} and the color is {$this->color}";
        }
    }

    class snake extends Animal
    {
        public function message()
        {
            echo " I am a Dragon";
        }
    }

    $snake2 = new snake("Snake", "Blue");
    $snake2->intro();
    $snake2->message();
?>