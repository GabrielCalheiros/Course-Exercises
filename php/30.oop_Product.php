<?php 
class Product{
    public $name = 'soap';
    public $price = 99.99;
}

$Book = new Product();

echo $Book->name.PHP_EOL;
echo $Book->price.PHP_EOL;
$Book->price = 100;
echo "New Price: ".$Book->price.PHP_EOL;





?> 
