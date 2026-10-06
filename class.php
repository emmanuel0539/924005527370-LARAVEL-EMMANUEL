<html>
    <body>
        <h1> The fruit program</h1>
<?php
    class Fruit{
        public $name;
        public $color;

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;

        }
    }

    $apple = new Fruit();
    $banana = new Fruits();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $Apple->get_name();
    echo "<br>";
    echo $banana->get_name();
?>
</body>
</html>


