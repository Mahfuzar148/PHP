<?php 

class BooksConstruct{
    var $title;
    var $price;
    public function __construct($par1,$par2)
    {
        $this->title = $par1;
        $this->price = $par2;
    }
    function getTitle()
    {
        echo $this->title."</br>";
    }
    function getPrice()
    {
        echo $this->price."</br>";
    }
    
}
$chemistry = new BooksConstruct("Advance Chemistry",100);
$physics = new BooksConstruct("Physics for high school",75);
$math = new BooksConstruct("Linear Algebra",50);


$chemistry->getTitle();
$chemistry->getPrice();

$physics->getTitle();
$physics->getPrice();

$math->getTitle();
$math->getPrice();

?>
