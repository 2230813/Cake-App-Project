<?php
namespace app\controllers;

// Apply the Login condition to the whole class
// #[\app\filters\Login]
class Product extends \app\core\Controller {

    // Display all products
    public function index() {
        $product = new \app\models\Product();
        $products = $product->getAll();
        $this->view('Product/index', $products);
    }

    // Create a new product
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = new \app\models\Product();
            // Assuming these values are provided from a form
            $product->name = $_POST['name'];
            $product->price = $_POST['price'];
            $product->details = $_POST['details'];
            $product->quantity = $_POST['quantity'];
            $product->image_path = $_POST['image']; // This will be the path to the image, actual image upload handling is needed
            
            $product->insert();
            header('location:/Product/index');
        } else {
            $this->view('Product/create');
        }
    }

    // Modify an existing product
    public function modify($product_id) {
        $product = new \app\models\Product();
        $existingProduct = $product->get($product_id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Set the new values from form submission
            $existingProduct->name = $_POST['name'];
            $existingProduct->price = $_POST['price'];
            $existingProduct->details = $_POST['details'];
            $existingProduct->quantity = $_POST['quantity'];
            // Handle file upload and set the new image path
            // $existingProduct->image_path = <handle file upload and get path>;
            
            $existingProduct->update();
            header('location:/Product/index');
        } else {
            $this->view('Product/modify', $existingProduct);
        }
    }

    // Delete a product
    public function delete($product_id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = new \app\models\Product();
            $product->product_id = $product_id;
            $product->delete();
            header('location:/Product/index');
        } else {
            $this->view('Product/delete', ['product_id' => $product_id]);
        }
    }
}
