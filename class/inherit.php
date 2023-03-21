<?php
class Jewellery {
    public $price = "We have a fixed price of 200000";

    function printMessage() {

        echo $this->price;
    }
}
class necklace extends jewellery{
    function print(){
        echo $this->price;
    }
}
$obj=new Necklace;
echo $obj->price;