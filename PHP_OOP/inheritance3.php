<?php
    class Animal1
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

    class snake1 extends Animal1
    {
        public $weight;
        public function __construct($name,$color,$weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        public function intro()
        {
            echo "The Animal is {$this->name} and the color is {$this->color} and the weight is {$this->weight}";
        }
    }

    $snakes = new snake1("Dog", "red", "20");
    $snakes->intro();
?>