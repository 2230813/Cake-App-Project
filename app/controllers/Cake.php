<?php
namespace app\controllers;

class Cake extends \app\core\Controller {

    public function details($product_id) {
        $productModel = new \app\models\Product();
        $product = $productModel->get($product_id);

        if ($product) {
            $reviewModel = new \app\models\Review();
            $reviews = $reviewModel->getReviewsByProduct($product_id);
            $product->reviews = $reviews; // Attach reviews to product
            // Debug statement
            // var_dump($product);
            $this->view('Product/details', ['product' => $product]);
        } else {
            // Handle product not found, redirect or show error
            header('Location: /Cake/catalog');
            exit;
        }
    }

    // // Display all products with filtering by type
    // public function catalog() {
    //     $productModel = new \app\models\Product();
    //     $type = isset($_GET['type']) ? $_GET['type'] : '';
    //     if ($type) {
    //         $products = $productModel->getByTypeWithRatings($type);
    //     } else {
    //         $products = $productModel->getAllWithRatings();
    //     }
    //     $this->view('Product/catalog', ['products' => $products, 'type' => $type]);
    // }

    // Display all products with filtering by type and search
    public function catalog() {
        $productModel = new \app\models\Product();
        $type = isset($_GET['type']) ? $_GET['type'] : '';
        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

        if ($type) {
            $products = $productModel->getByTypeWithRatingsAndSearch($type, $searchTerm);
        } else if ($searchTerm) {
            $products = $productModel->searchProductsWithRatings($searchTerm);
        } else {
            $products = $productModel->getAllWithRatings();
        }

        $this->view('Product/catalog', ['products' => $products, 'type' => $type, 'searchTerm' => $searchTerm]);
    }

    
}
