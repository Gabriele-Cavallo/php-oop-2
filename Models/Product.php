<?php 
class Product {
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