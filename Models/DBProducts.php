<?php
require_once __DIR__ . './Food.php';
require_once __DIR__ . './Accessory.php';

$firstDogProduct = new Food('./img/cane.jpg', 'dog', 9.99, 'Food');
$firstDogProduct->age = 2;
$firstCatProduct = new Food('./img/gatto.jpeg', 'cat', 9.99, 'Food');
$firstCatProduct->age = 1;
$secondDogProduct = new Product('./img/cane.jpg', 'dog', 7.99, 'Snack');
$secondCatProduct = new Product('./img/gatto.jpeg', 'cat', 7.99, 'Snack');
$thirdDogProduct = new Product('./img/cane.jpg', 'dog', 19.99, 'Toys');
$thirdDogProduct->age = 1;
$thirdCatProduct = new Product('./img/gatto.jpeg', 'cat', 19.99, 'Toys');
$thirdCatProduct->age = 2;
$fourthDogProduct = new Accessory('./img/cane.jpg', 'dog', 29.99, 'Accessories');
$fourthCatProduct = new Accessory('./img/gatto.jpeg', 'cat', 29.99, 'Accessories');
$fifthDogProduct = new Product('./img/cane.jpg', 'dog', 49.99, 'Hygiene');
$fifthCatProduct = new Product('./img/gatto.jpeg', 'cat', 49.99, 'Hygiene');
$leash = new Product('./img/cane.jpg', 'dog', 15.99, 'Leash');
$bib = new Product('./img/cane.jpg', 'dog', 7.99, 'Bib');
$scratchingPost = new Product('./img/gatto.jpeg', 'cat', 16.99, 'Scratching Post');
$carriers = new Product('./img/gatto.jpeg', 'cat', 37.99, 'Carriers');


$productsList = [
    $firstDogProduct, $firstCatProduct, $secondDogProduct, $secondCatProduct,
    $thirdDogProduct, $thirdCatProduct, $fourthDogProduct, $fourthCatProduct, 
    $fifthDogProduct, $fifthCatProduct, $leash , $bib, $scratchingPost, $carriers
];
?>