<?php 
class Shop {
    public $name;
    public $loc;

    function __construct($name,$loc) {
        $this->name=$name;
        $this->loc=$loc;

    }


    function __destruct() {
     echo "the shop is{$this->name} . and the loc is {$this->loc}";
    }
}


$shop = new Shop('K.V Tex','Cuddalore');


?>