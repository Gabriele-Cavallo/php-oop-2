<?php
require_once __DIR__ . './Categories.php';

class Cats extends Categories{
    public $scratchingPost;
    public $carriers;

    public function __construct($_food, $_snack, $_toys, $_accessoryes, $_hygiene, $_scratchingPost, $_carriers){
        parent::__construct($_food, $_snack, $_toys, $_accessoryes, $_hygiene);
        $this->scratchingPost = $_scratchingPost;
        $this->carriers = $_carriers;
    }
}
$categoriesCatsList = new Cats('food', 'snack', 'toys', 'accessories', 'hygiene', 'scratching post', 'carriers');
$categoriesCats = [
    'Food', 'Snack', 'Toys', 'Accessories', 'Hygiene', 'Scratching Post', 'Carriers'
];
?>