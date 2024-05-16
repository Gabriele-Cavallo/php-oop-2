<?php 
// Categories products
$food = new Category('Food');
$snack = new Category('Snack');
$toys = new Category('Toys');
$accessories = new Category('Accessories');
$hygiene = new Category('Hygiene');
$leash = new Category('Leash');
$leash->category = 'dog';
$bib = new Category('Bib');
$bib->category = 'dog';
$scratchingPost = new Category('Scratching Post');
$scratchingPost->category = 'cat';
$carriers = new Category('Carriers');
$carriers->category = 'cat';
$categories = [
    $food, $snack, $toys, $accessories, $hygiene, $leash, $bib, $scratchingPost, $carriers 
];
?>