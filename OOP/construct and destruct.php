<?php 
class man{
    public $name;
    public $age;
    public $address;
    
    public function __construct($name,$age,$address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
    
    public function __destruct(){
        echo "Name :".$this->name."</br> Age :".$this->age."</br> Address : ".$this->address."</br>";
    }
}
$man1 = new man("Mahfuzar Rahman","22","Rangpur Sadar, Rangpur");
 
?>
