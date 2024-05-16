<?php
require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/DBProducts.php';
require_once __DIR__ . './Models/Category.php';
require_once __DIR__ . './Models/Dogs.php';
require_once __DIR__ . './Models/Cats.php';

// Generic categories
$food = new Category('Food');
$snack = new Category('Snack');
$toys = new Category('Toys');
$accessories = new Category('Accessories');
$hygiene = new Category('Hygiene');
// $categoriesList = new Categors('food', 'snack', 'toys', 'accessories', 'hygiene');
$categories = [
    $food, $snack, $toys, $accessories, $hygiene
];
// Dogs categories
$categoriesDogsList = new Dogs('food', 'snack', 'toys', 'accessories', 'hygiene', 'leash', 'bib');
$categoriesDogs = [
    'Food', 'Snack', 'Toys', 'Accessories', 'Hygiene', 'Leash', 'Bib'
];
// Cats categories
$categoriesCatsList = new Cats('food', 'snack', 'toys', 'accessories', 'hygiene', 'scratching post', 'carriers');
$categoriesCats = [
    'Food', 'Snack', 'Toys', 'Accessories', 'Hygiene', 'Scratching Post', 'Carriers'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pets Shop</title>
</head>
<body>
    <section>
        <h2 class="title">GENERAL CATEGORIES</h2>
        <div class="categories-wrapper">
            <?php foreach($categories as $category) { ?>
                <div class="card-wrapper">
                    <h2><?php echo $category->name ?></h2>
                    <div class="cards">
                        <?php foreach($productsList as $singleProduct) { ?>
                            <?php if ($singleProduct->type == $category->name){ ?>
                                <div>
                                    <img src="<?php echo  $singleProduct->image; ?>" alt="product">
                                    <h4><?php echo  $singleProduct->category; ?></h4>
                                    <h4><?php echo  $singleProduct->price; ?></h4>
                                    <h4><?php echo  $singleProduct->type; ?></h4>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <section>
        <h2 class="title">DOGS CATEGORIES</h2>
        <div class="categories-wrapper">
            <?php foreach($categoriesDogs as $category) { ?>
                <div class="card-wrapper">
                    <h2><?php echo $category ?></h2>
                    <div class="cards">
                        <?php foreach($productsList as $singleProduct) { ?>
                            <?php if ($singleProduct->type == $category && $singleProduct->category == 'dog'){ ?>
                                <div>
                                    <img src="<?php echo  $singleProduct->image; ?>" alt="product">
                                    <h4><?php echo  $singleProduct->category; ?></h4>
                                    <h4><?php echo  $singleProduct->price; ?></h4>
                                    <h4><?php echo  $singleProduct->type; ?></h4>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <section>
        <h2 class="title">CATS CATEGORIES</h2>
        <div class="categories-wrapper">
            <?php foreach($categoriesCats as $category) { ?>
                <div class="card-wrapper">
                    <h2><?php echo $category ?></h2>
                    <div class="cards">
                        <?php foreach($productsList as $singleProduct) { ?>
                            <?php if ($singleProduct->type == $category && $singleProduct->category == 'cat'){ ?>
                                <div>
                                    <img src="<?php echo  $singleProduct->image; ?>" alt="product">
                                    <h4><?php echo  $singleProduct->category; ?></h4>
                                    <h4><?php echo  $singleProduct->price; ?></h4>
                                    <h4><?php echo  $singleProduct->type; ?></h4>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</body>
</html>