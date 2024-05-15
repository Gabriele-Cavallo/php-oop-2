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
    <link rel="stylesheet" href="./css/style.css">
    <title>Pets Shop</title>
</head>
<body>
    <div class="categories-wrapper">
        <?php foreach($categories as $category) { ?>
            <div class="card-wrapper">
                <h2><?php echo $category ?></h2>
                <div class="cards">
                    <?php foreach($productsList as $singleProduct) { ?>
                        <?php if ($singleProduct->type == $category){ ?>
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
</body>
</html>