<?php 
require_once __DIR__ . '/../Traits/Age.php';

class Product {
    use Age;

    public $image;
    public $category;
    public $price;
    public $type;
    
    public function __construct($_image, $_category, $_price, $_type){
        $this->image = $_image;
        $this->category = $_category;
        $this->price = $_price . '€';
        $this->type = $_type;
    }
}
?>