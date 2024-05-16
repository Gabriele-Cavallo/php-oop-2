<?php
require_once __DIR__ . './Category.php';

class Cats extends Category{
    public $scratchingPost;
    public $carriers;

    public function __construct($_food, $_snack, $_toys, $_accessoryes, $_hygiene, $_scratchingPost, $_carriers){
        parent::__construct($_food, $_snack, $_toys, $_accessoryes, $_hygiene);
        $this->scratchingPost = $_scratchingPost;
        $this->carriers = $_carriers;
    }
}
?>