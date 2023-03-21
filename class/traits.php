<?php
trait hello {
    public function hello() {
        echo "Hello";
    }
}
trait world {
    public function world() {
        echo "World";
    }
}
class MyClass {
    use Hello,World;
}
$obj = new MyClass();
$obj->Hello();
$obj->World();
?>