
<?php 
    class Fruits
    {
        // two properties
        public $name;
        public $color;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        function getName()
        {
            return $this->name;
        }
        function getColor()
        {
            return $this->color;
        }
    }

    $apple = new Fruits("Snake", "Blue");
    echo "Name: ". $apple->getName(). "<br>";
    echo "Color: ". $apple->getColor(). "<br";

    
?>