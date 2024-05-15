<?php
// $productsList = new ProductCategory('food', 'snack', 'toys', 'accessories', 'hygiene');
$firstDogProduct = new Product('img', 'dog', 9.99, 'food');
$firstCatProduct = new Product('img', 'cat', 9.99, 'food');
$secondDogProduct = new Product('img', 'dog', 7.99, 'snack');
$secondCatProduct = new Product('img', 'cat', 7.99, 'snack');
$thirdDogProduct = new Product('img', 'dog', 19.99, 'toys');
$thirdCatProduct = new Product('img', 'cat', 19.99, 'toys');
$fourthDogProduct = new Product('img', 'dog', 29.99, 'accessories');
$fourthCatProduct = new Product('img', 'cat', 29.99, 'accessories');
$fifthDogProduct = new Product('img', 'dog', 49.99, 'hygiene');
$fifthCatProduct = new Product('img', 'cat', 49.99, 'hygiene');

$productsList = [
    $firstDogProduct, $secondDogProduct, $thirdDogProduct, $fourthDogProduct, $fifthDogProduct
]
?>