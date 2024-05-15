<?php
namespace app\controllers;

class Cake extends \app\core\Controller {

    // // Display all products
    // public function catalog() {
    //     $product = new \app\models\Product();
    //     $products = $product->getAll();
    //     $this->view('Product/catalog', $products);
    // }

    // Display all products with filtering by type
    // public function catalog() {
    //     $product = new \app\models\Product();
    //     $type = isset($_GET['type']) ? $_GET['type'] : '';
    //     if ($type) {
    //         $products = $product->getByType($type);
    //     } else {
    //         $products = $product->getAll();
    //     }
    //     $this->view('Product/catalog', ['products' => $products, 'type' => $type]);
    // }



    // public function details($product_id) {
    //     $productModel = new \app\models\Product();
    //     $product = $productModel->get($product_id);

    //     $this->view('Product/details', $product);
    // }

    // Display all products with filtering by type
    public function catalog() {
        $product = new \app\models\Product();
        $type = isset($_GET['type']) ? $_GET['type'] : '';
        if ($type) {
            $products = $product->getByType($type);
        } else {
            $products = $product->getAll();
        }
        $this->view('Product/catalog', ['products' => $products, 'type' => $type]);
    }

    public function details($product_id) {
        $productModel = new \app\models\Product();
        $product = $productModel->get($product_id);

        if ($product) {
            $reviewModel = new \app\models\Review();
            $reviews = $reviewModel->getReviewsByProduct($product_id);
            $product->reviews = $reviews; // Attach reviews to product
            $this->view('Product/details', ['product' => $product]);
        } else {
            // Handle product not found, redirect or show error
            header('Location: /Cake/catalog');
            exit;
        }
    }

    
}
