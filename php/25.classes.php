<html>
<head></head>
<br><br>


<?php  
class Book {
    var $title;
    var $author;
    var $pageNumber;
}

$book1 = new Book;
$book1->title = "Minha Luta";
$book1->author = "A.H.";
$book1->pageNumber = 400;

echo $book1->author;

?>
</html>
