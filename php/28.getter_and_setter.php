<html>
<head></head>
<br><br>


<?php  
class Book {
    public $title;
    public $author;
    public $pageNumber;
    private $rating;



    function __construct($aTitle,$aAuthor,$aPages,$aRating){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pageNumber = $aPages;
        $this->rating = $aRating;
    }

    function getRating(){
        return $this->rating;
    }

    function setRating($rating){
        if($rating == "A" || $rating == "B" || $rating == "C" ){
            $this->rating = $rating;
        }else{
            $this->rating = "NR";
        }
        
    }


}

$book1 = new Book("Minha Luta", "A.H", 400,"A");
$book2 = new Book("Lord of The Rings", "Tolkien", 1300,"A");
$book3 = new Book("Crónicas", "Machado de Assis", 250,"B");



echo $book1->author.PHP_EOL;
echo $book1->setRating("A").PHP_EOL;
echo $book1->getRating().PHP_EOL;

?>
</html>
