<?php

// ProductController.php
class ProductController {
    public function index() {
        $products = []; 
        header('Content-Type: application/json');
        echo json_encode($products);
    }
}

$controller = new ProductController();
$controller->index();


?>
