<?php
class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function getInfo() {
        return "The fruit is a {$this->name} and its color is {$this->color}.";
    }
}

$apple = new Fruit("Apple", "Red");
$banana = new Fruit("Banana", "Yellow");

echo $apple->getInfo();
echo "\n";
echo $banana->getInfo();
?>