<?php

// Product.php
class Product {
    public $name;
    public $priceHt;
    public $creationDate;
    public $dateUpdate;

    public function __construct($name, $priceHt, $creationDate, $dateUpdate = null) {
        $this->name = $name;
        $this->priceHt = $priceHt;
        $this->creationDate = $creationDate;
        $this->dateUpdate = $dateUpdate;
    }
}

// Création d'une instance de produit
$product = new Product("Nom du produit", 10.99, new DateTime(), null);

?>
