<?php
namespace app\controllers;

class Cake extends \app\core\Controller {

    // Display all products
    public function catalog() {
        $product = new \app\models\Product();
        $products = $product->getAll();
        $this->view('Product/catalog', $products);
    }

    
}
