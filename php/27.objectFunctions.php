<html>
<head></head>
<br><br>


<?php  
class Book {
    var $title;
    var $author;
    var $pageNumber;

    function __construct($aTitle,$aAuthor,$aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pageNumber = $aPages;
    }

    function bigBook(){
        if($this->pageNumber >= 300){
            return "true";
            }else{ return "false";}
    }
}

$book1 = new Book("Minha Luta", "A.H", 400);
$book2 = new Book("Lord of The Rings", "Tolkien", 1300);
$book3 = new Book("Crónicas", "Machado de Assis", 250);



echo $book1->author.PHP_EOL;
echo $book1->bigBook();

?>
</html>
