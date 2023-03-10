<?php 
class Counter{
    private static int $count = 0;

    public function __construct(){
        self::$count++;
    }

    public function getCount():int{
        return self::$count;
    }

    public function setCount():int{
        self::$count++;
    }

    public static function getCountSTATIC():int{
        return self::$count;
    }

    
}

$counter1 = new Counter;
echo $counter1->getCount().PHP_EOL;
$counter2 = new Counter;
echo $counter2->getCount().PHP_EOL;



//print Counter::$count.PHP_EOL;
//Counter::$count++;
//print Counter::$count.PHP_EOL;

// Disponível em qualquer lugar do programa
// Easy to setup and access
// Same value is avalilale to every object instance of that class

?>

