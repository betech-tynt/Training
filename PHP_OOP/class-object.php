
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
    }

    $snake = new Fruit();
    $monster = new Fruit();
    $snake->setName("Snake");
    $monster->setName("Monster");

    echo $snake->getName(). "<br>";
    echo $monster->getName(). "<br>";
?>