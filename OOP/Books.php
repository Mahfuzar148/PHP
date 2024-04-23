<?php

  class Books{
    var $price;
    var $title;
    function setPrice($par)
    {
        $this->price = $par;
    }
    function getPrice()
    {
        echo $this->price."</br>";
    }
    function setTitle($par)
    {
        $this->title = $par;
    }
    function getTiltle()
    {
        echo $this->title."</br>";
    }
    
  }
  $physics = new Books();
  $chemistry = new Books();
  $math = new Books();
  
  $chemistry->setPrice(100);
  $chemistry->setTitle("Advance Chemistry");
  
  $physics->setPrice(75);
  $physics->setTitle("Physics for high school");
  
  $math->setPrice(50);
  $math->setTitle("Linear Algebrafor higher secondary school");
  
  $chemistry->getPrice();
  $chemistry->getTiltle();
  
  $physics->getPrice();
  $physics->getTiltle();
  
  $math->getPrice();
  $math->getTiltle();


?>
