<?php
class Food {
    public $name;
    public $price;

    function name() {
        $this->price++;
    }
    function price() {
        $this->price--;
    }
    function __construct($n,$p) {
        $this->name=$n;
        $this->price=$p;

    }
}

$food = new Food('Pasta','140');
echo $food->name;
?>