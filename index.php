<?php
require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/DBProducts.php';
require_once __DIR__ . './Models/Category.php';
require_once __DIR__ . './Models/DBCategories.php';
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
                <?php if($category->category == ''){ ?>
                    <div class="card-wrapper">
                        <h2><?php echo $category->name ?></h2>
                        <div class="cards">
                            <?php foreach($productsList as $singleProduct) { ?>
                                <?php $className = get_class($singleProduct) ?>
                                <?php if ($singleProduct->type == $category->name){ ?>
                                    <div>
                                        <img src="<?php echo  $singleProduct->image; ?>" alt="product">
                                        <h4><?php echo  $singleProduct->category; ?></h4>
                                        <h4><?php echo  $singleProduct->price; ?></h4>
                                        <h4><?php echo  $singleProduct->type; ?></h4>
                                        <?php if($className == 'Accessory') { ?>
                                            <h4>Size: <?php echo  $singleProduct->size; ?></h4>
                                        <?php } ?>
                                        <?php if($singleProduct->age) { ?>
                                            <h4>Age: <?php echo  $singleProduct->age; ?> +</h4>
                                        <?php } ?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </section>
    <section>
        <h2 class="title">DOGS CATEGORIES</h2>
        <div class="categories-wrapper">
            <?php foreach($categories as $category) { ?>
                <?php if($category->category == '' || $category->category == 'dog'){ ?>
                    <div class="card-wrapper">
                        <h2><?php echo $category->name ?></h2>
                        <div class="cards">
                            <?php foreach($productsList as $singleProduct) { ?>
                                <?php $className = get_class($singleProduct) ?>
                                <?php if ($singleProduct->type == $category->name && $singleProduct->category == 'dog'){ ?>
                                    <div>
                                        <img src="<?php echo  $singleProduct->image; ?>" alt="product">
                                        <h4><?php echo  $singleProduct->category; ?></h4>
                                        <h4><?php echo  $singleProduct->price; ?></h4>
                                        <h4><?php echo  $singleProduct->type; ?></h4>
                                        <?php if($className == 'Accessory') { ?>
                                            <h4>Size: <?php echo  $singleProduct->size; ?></h4>
                                        <?php } ?>
                                        <?php if($singleProduct->age) { ?>
                                            <h4>Age: <?php echo  $singleProduct->age; ?> +</h4>
                                        <?php } ?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </section>
    <section>
        <h2 class="title">CATS CATEGORIES</h2>
        <div class="categories-wrapper">
            <?php foreach($categories as $category) { ?>
                <?php if($category->category == '' || $category->category == 'cat'){ ?>
                    <div class="card-wrapper">
                        <h2><?php echo $category->name ?></h2>
                        <div class="cards">
                            <?php foreach($productsList as $singleProduct) { ?>
                                <?php $className = get_class($singleProduct) ?>
                                <?php if ($singleProduct->type == $category->name && $singleProduct->category == 'cat'){ ?>
                                    <div>
                                        <img src="<?php echo  $singleProduct->image; ?>" alt="product">
                                        <h4><?php echo  $singleProduct->category; ?></h4>
                                        <h4><?php echo  $singleProduct->price; ?></h4>
                                        <h4><?php echo  $singleProduct->type; ?></h4>
                                        <?php if($className == 'Accessory') { ?>
                                            <h4>Size: <?php echo  $singleProduct->size; ?></h4>
                                        <?php } ?>
                                        <?php if($singleProduct->age) { ?>
                                            <h4>Age: <?php echo  $singleProduct->age; ?> +</h4>
                                        <?php } ?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </section>
</body>
</html>