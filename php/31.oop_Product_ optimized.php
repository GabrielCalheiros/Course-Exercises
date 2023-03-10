<?php 
class Product{

    public function __construct(public $name = 'Book', public $price = 100){

    }

    public function printAsCurrency($currency = "R$:"){
        echo "Price: ".$currency.$this->price.".00";
    }

}

$Book = new Product(name: "DDR",price: 12);
echo $Book->name.PHP_EOL;
echo $Book->price.PHP_EOL;
$Book->printAsCurrency();




?> 
