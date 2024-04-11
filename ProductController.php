<?php
// ProductController.php
class ProductController {
    public function index() {
        $products = []; 

        header('Content-Type: application/json');
        echo json_encode($products);
    }

    public function new() {
        // Afficher le formulaire pour ajouter un nouveau produit
        include_once __DIR__ . '/../templates/product/new.html';
    }

    public function edit($id) {
        $product = new Product("Nom du produit", 10.99, new DateTime());
        include_once __DIR__ . '/../templates/product/edit.html';
    }
}

$controller = new ProductController();

// Vérification de l'action demandée
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $controller->edit($id);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $priceHt = $_POST['priceHt'];
    $dateUpdate = new DateTime();
    header('Location: /product');
    exit;
}


