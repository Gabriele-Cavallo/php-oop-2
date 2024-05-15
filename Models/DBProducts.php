<?php
// $productsList = new ProductCategory('food', 'snack', 'toys', 'accessories', 'hygiene');
$firstDogProduct = new Product('./img/cane.jpg', 'dog', 9.99, 'Food');
$firstCatProduct = new Product('./img/gatto.jpeg', 'cat', 9.99, 'Food');
$secondDogProduct = new Product('./img/cane.jpg', 'dog', 7.99, 'Snack');
$secondCatProduct = new Product('./img/gatto.jpeg', 'cat', 7.99, 'Snack');
$thirdDogProduct = new Product('./img/cane.jpg', 'dog', 19.99, 'Toys');
$thirdCatProduct = new Product('./img/gatto.jpeg', 'cat', 19.99, 'Toys');
$fourthDogProduct = new Product('./img/cane.jpg', 'dog', 29.99, 'Accessories');
$fourthCatProduct = new Product('./img/gatto.jpeg', 'cat', 29.99, 'Accessories');
$fifthDogProduct = new Product('./img/cane.jpg', 'dog', 49.99, 'Hygiene');
$fifthCatProduct = new Product('./img/gatto.jpeg', 'cat', 49.99, 'Hygiene');

$productsList = [
    $firstDogProduct, $firstCatProduct, $secondDogProduct, $secondCatProduct, $thirdDogProduct, $thirdCatProduct, $fourthDogProduct, $fourthCatProduct, $fifthDogProduct, $fifthCatProduct
];
?>