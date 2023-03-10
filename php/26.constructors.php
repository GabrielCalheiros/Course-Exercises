
<?php  
class Book {
    var $title;
    var $author;
    var $pageNumber;

    function __construct($aTitle,$aAuthor,$aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pageNumber = $aPages;
        echo "New Book: $aTitle".PHP_EOL;
    }
}

$book1 = new Book("Minha Luta", "A.H", 400);
$book2 = new Book("Lord of The Rings", "Tolkien", 1300);
$book3 = new Book("Crónicas", "Machado de Assis", 250);



echo $book1->author.PHP_EOL;

?>
