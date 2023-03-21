<?php
class Girl {
    public $name;
    public $age;

    function set_name($name) {
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_age($age){
        $this->age=$age;
    }
    function get_age(){
        return $this->age;
}
}
$jananee=new Girl();
$nithya = new Girl();
$jananee->set_name('Jananee');
$jananee->set_age('21');
echo "Name:".$jananee->get_name();
echo "<br>";
echo "Age:".$jananee->get_age();
?>

