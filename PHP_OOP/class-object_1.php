
<?php 
    class Fruit
    {
        // two properties
        public $name;
        public $color;

        // Two methods
        function setName($name)
        {
            $this->name = $name;
        }
        function getName()
        {
            return $this->name;
        }

        function setColor($color)
        {
            $this->color = $color;
        }
        function getColor()
        {
            return $this->color;
        }
    }

    $apple = new Fruit();
    $apple->setName("Apple");
    $apple->setColor("red");
    echo "Name: " . $apple->getName(). "<br>";
    echo "Color: " . $apple->getColor(). "<br>";
?>