<?php
//Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
//An abstract class is a class that contains at least one abstract method.
// An abstract method is a method that is declared, but not implemented in the code.


abstract class Book {
    var $title;
    var $pages;

    abstract public function printBook();
}

class PhysicalBook extends Book{

    public function __construct($aTitle,$aPages){
        $this->title = $aTitle;
        $this->pages = $aPages;
    }

    public function printBook(){
        echo "Title: ".$this->title.PHP_EOL;
        echo "Pages: ".$this->pages.PHP_EOL;

    }
}

$Bible = new PhysicalBook("Bible",156);
$Bible->printBook();


?>