<?php
require_once __DIR__ . './DBProducts.php';

class Categories {
    public $food;
    public $snack;
    public $toys;
    public $accessories;
    public $hygiene;
    
    // public $categories = ['food', 'snack', 'toys', 'accessories', 'hygiene'];

    public function __construct($_food, $_snack, $_toys, $_accessoryes, $_hygiene){
        $this->food = $_food;
        $this->snack = $_snack;
        $this->toys = $_toys;
        $this->accessories = $_accessoryes;
        $this->hygiene = $_hygiene;
    }
}
$categoriesList = new Categories('food', 'snack', 'toys', 'accessories', 'hygiene')
?>