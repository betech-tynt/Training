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

        protected function intro()
        {
            echo "The Animal is {$this->name} and the color is {$this->color}";
        }
    }

    class snake extends Animal
    {
        public function message()
        {
            echo "I am a Dragon ";

            $this -> intro();
        }
    }

    $snakes = new snake("Snake", "Blue");
    $snakes->message();
?>