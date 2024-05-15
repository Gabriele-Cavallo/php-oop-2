<?php
require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/DBProducts.php';
require_once __DIR__ . './Models/Categories.php';
require_once __DIR__ . './Models/Dogs.php';
require_once __DIR__ . './Models/Cats.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Shop</title>
</head>
<body>
    <?php var_dump($productsList) ?>
    <?php var_dump($categoriesList) ?>
    <?php var_dump($categoriesDogsList) ?>
    <?php var_dump($categoriesCatsList) ?>
</body>
</html>