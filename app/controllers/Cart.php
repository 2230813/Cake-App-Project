<?php
namespace app\controllers;

//applying the Login condition to the whole class
#[\app\filters\Login]
class Cart extends \app\core\Controller {
    private $cartModel;

    public function __construct() {
        $this->cartModel = new \app\models\CartDetails();
    }

    public function addToCart($productId) {
        $this->cartModel->product_id = $productId;
        $this->cartModel->insert();
    }

    public function removeFromCart($productId) {
        $this->cartModel->delete($productId);
    }

    public function updateItemAmounts($productId, $newAmount) {
        $this->cartModel->update($productId, $newAmount);
    }

    public function viewCart() {
        $cartItems = $this->cartModel->getCartItems();
        $this->view('Cart/index', $cartItems);
    }
}