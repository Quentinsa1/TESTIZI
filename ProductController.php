<?php
class ProductController
{
    public function index()
    {
        $products = [];
        header('Content-Type: application/json');
        echo json_encode($products);
    }

    public function new ()
    {
        include_once __DIR__ . '/../templates/product/new.html';
    }
}

$controller = new ProductController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller->new();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $priceHt = $_POST['priceHt'];
    $product = new Product($name, $priceHt, new DateTime());
    header('Location: /product');
    exit;
}
