<?php 

    class BaseClass{
        public $publicProperty = "Public can be accessed from anywhere in the code.";
        protected $protectedProperty = "Protected can only be accessed from declared class or subclass.";

    }
    
    class subClass extends BaseClass{
        private $privateProperty = "Private can only be accessed from declared class";
        function getprotectedProperty():string{
            return $this->protectedProperty;
        }

        function getprivateProperty():string{
            return $this->privateProperty;
        }
    }



    $classe = new BaseClass();
    $classe2 = new subClass();


    echo $classe->publicProperty.PHP_EOL;
    echo $classe2->getprotectedProperty().PHP_EOL;
    echo $classe2->getprivateProperty().PHP_EOL;


?>
