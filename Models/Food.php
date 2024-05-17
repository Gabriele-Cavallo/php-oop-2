<?php
require_once __DIR__ . './Product.php';
require_once __DIR__ . '/../Traits/Size.php';

class Food extends Product{
    use Age;    
}
?>