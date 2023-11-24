<?php
    class demo
    {
        public $name;
        protected $color;
        private $weight;
    }

    // $snake = new demo("");
    $snake->name = "Snake"; // OK
    // $snake->color = "Blue"; // error
    // $snake->weight = "300"; // error

?>

<?php
    class Animals
    {
        public $name;
        public $color;
        public $weight;

        function set_name($n) {  // a public function (default)
            $this->name = $n;
        }
        protected function set_color($n) { // a protected function
            $this->color = $n;
        }
        private function set_weight($n) { // a private function
            $this->weight = $n;
        }
    }

    $snake = new Animals();
    $snake->name = "Snake"; // OK
    // $snake->color = "Blue"; // error
    // $snake->weight = "300"; // error
    
?>