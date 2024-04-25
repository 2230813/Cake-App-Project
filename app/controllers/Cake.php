<?php
namespace app\controllers;

class Cake extends \app\core\Controller {

    // Display all products
    public function catalog() {
        $product = new \app\models\Product();
        $products = $product->getAll();
        $this->view('Product/catalog', $products);
    }

    public function details($product_id) {
        $productModel = new \app\models\Product();
        $product = $productModel->get($product_id);

        $this->view('Product/details', $product);
    }
    
}
