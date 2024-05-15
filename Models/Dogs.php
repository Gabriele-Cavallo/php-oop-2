<?php
require_once __DIR__ . './Categories.php';

class Dogs extends Categories{
    public $leash;
    public $bib;

    public function __construct($_food, $_snack, $_toys, $_accessoryes, $_hygiene, $_leash, $_bib){
        parent::__construct($_food, $_snack, $_toys, $_accessoryes, $_hygiene);
        $this->leash = $_leash;
        $this->bib = $_bib;
    }
}
$categoriesDogsList = new Dogs('food', 'snack', 'toys', 'accessories', 'hygiene', 'leash', 'bib')
?>