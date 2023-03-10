<?php 
class Counter{
    public static int $count = 0;

    public function __construct(){

        self::$count++;
    }
}

print Counter::$count.PHP_EOL;
Counter::$count++;
print Counter::$count.PHP_EOL;

// Disponível em qualquer lugar do programa
// Easy to setup and access
// Same value is avalilale to every object instance of that class

?>

