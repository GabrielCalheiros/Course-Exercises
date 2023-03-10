<?php 

    class Book{
        public function __construct(public string $title,public int $pages){
        }
    }

    class PhysicalBook extends Book{
        public function __construct(public string $title,public int $pages, int $weight){
            parent::__construct($title, $pages);
            $this->weight = $weight;
        }
    }

    class DigitalBook extends Book{
        public function __construct(public string $title,public int $pages, string $file_size){
            parent::__construct($title, $pages);
            $this->file_size = $file_size;
        }
    }

    $lotr = new PhysicalBook("Lord of the rings Physical", 1000, 1);
    echo "Title".$lotr->title."\t"."Pages: ".$lotr->pages."\tWeight: ".$lotr->weight.PHP_EOL;

    $lotrD = new DigitalBook("Lord of the rings Digital", 999, "50mb");
    echo "Title".$lotrD->title."\t"."Pages: ".$lotrD->pages."\tWeight: ".$lotrD->file_size.PHP_EOL;
?>
