<?php
namespace app\controllers;
// controllers/Product.php

// Apply the Login condition to the whole class
#[\app\filters\Login]
class Product extends \app\core\Controller {

    // Display all products
    public function index() {
        $product = new \app\models\Product();
        $products = $product->getAll();
        $this->view('Product/index', $products);
    }

    public function adminCreate() {
        $productModel = new \app\models\Product();
        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
        $products = [];

        if ($searchTerm) {
            // If there is a search term, filter the products by the search term
            $products = $productModel->searchProducts($searchTerm);
        } else {
            // No search term, get all products
            $products = $productModel->getAll();
        }

        $this->view('Product Management/adminCreate', ['products' => $products]);
    }
    
    // public function adminEdit($product_id = null) {
    //     $productModel = new \app\models\Product();
    //     if ($product_id) {
    //         $product = $productModel->get($product_id);
    //         $this->view('Product Management/adminEdit', ['product' => $product]);
    //     } else {
    //         $products = $productModel->getAll();
    //         $this->view('Product Management/adminEdit', ['products' => $products]);
    //     }
    // }
    
    public function adminEdit($product_id = null) {
        $productModel = new \app\models\Product();
        if ($product_id) {
            $product = $productModel->get($product_id);

            $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
            $products = [];

            if ($searchTerm) {
                // If there is a search term, filter the products by the search term
                $products = $productModel->searchProducts($searchTerm);
            } else {
                // No search term, get all products
                $products = $productModel->getAll();
            }

            $this->view('Product Management/adminEdit', ['product' => $product, 'products' => $products]);
        } else {
            $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
            $products = [];

            if ($searchTerm) {
                // If there is a search term, filter the products by the search term
                $products = $productModel->searchProducts($searchTerm);
            } else {
                // No search term, get all products
                $products = $productModel->getAll();
            }
            $this->view('Product Management/adminEdit', ['products' => $products]);
        }
    }

    public function adminDelete() {
        $productModel = new \app\models\Product();
        $products = $productModel->getAll();
        $this->view('Product Management/adminDelete', ['products' => $products]);
    }
    

    // Create a new product
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = new \app\models\Product();
            $product->name = $_POST['name'];
            $product->price = $_POST['price'];
            $product->type = $_POST['type'];
            $product->details = $_POST['details'];
            $product->quantity = $_POST['quantity'];
            $product->image_path = NULL; // Default to NULL

            // Only handle image upload if a file is provided
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $target_dir = "uploads/";
                $fileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
                $target_file = $target_dir . $product->name . '_' . time() . '.' . $fileType; // Create a unique file name

                // Check if file type is valid
                if (in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        $product->image_path = $target_file;
                    } else {
                        // Handle file upload error
                        $_SESSION['error'] = 'Failed to upload image.';
                    }
                } else {
                    // Handle invalid file type
                    $_SESSION['error'] = 'Invalid file type. Only JPG, JPEG, PNG, & GIF files are allowed.';
                }
            }

            // Insert product information into database
            $product->insert();
            header('location:/Product/adminCreate');
            exit;
        } else {
            // Not a POST request
            $this->view('Product Management/adminCreate');
        }
    }

    // Modify an existing product
    public function modify($product_id) {
        $productModel = new \app\models\Product();
        $existingProduct = $productModel->get($product_id);
        
        if (!$existingProduct) {
            header('Location: /Product/adminCreate?error=ProductNotFound');
            exit;
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $existingProduct->name = $_POST['name'];
            $existingProduct->price = $_POST['price'];
            $existingProduct->type = $_POST['type'];
            $existingProduct->details = $_POST['details'];
            $existingProduct->quantity = $_POST['quantity'];
    
            if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
                $target_dir = "uploads/";
                $fileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
                if (in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        if ($existingProduct->image_path && file_exists($existingProduct->image_path)) {
                            unlink($existingProduct->image_path);
                        }
                        $existingProduct->image_path = $target_file;
                    } else {
                        $_SESSION['error'] = "Failed to upload new image.";
                        header('Location: /Product/adminEdit/' . $product_id);
                        exit;
                    }
                } else {
                    $_SESSION['error'] = "Invalid file type. Only JPG, JPEG, PNG, & GIF files are allowed.";
                    header('Location: /Product/adminEdit/' . $product_id);
                    exit;
                }
            }
            
            $existingProduct->update();
            header('Location: /Product/adminCreate');
            exit;
        } else {
            $this->view('Product Management/adminEdit', ['product' => $existingProduct]);
        }
    }
    

    // Delete a product
    public function delete($product_id) {
        $product = new \app\models\Product();
        $existingProduct = $product->get($product_id);
    
            if ($existingProduct) {
                // If an image path exists and the file exists, delete the image file
                if ($existingProduct->image_path && file_exists($existingProduct->image_path)) {
                    unlink($existingProduct->image_path);
                }
    
                // Continue to delete the product from the database regardless of whether there was an image
                $existingProduct->delete();
                header('location:/Product/adminCreate');
                exit;
            } else {
                // If the product doesn't exist, handle the error
                header('location:/Product/adminCreate?error=ProductNotFound');
                exit;
            }
    }
    
}
