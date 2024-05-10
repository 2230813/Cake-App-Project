<?php
namespace app\controllers;

//applying the Login condition to the whole class
#[\app\filters\Login]
#[\app\filters\HasProfile]
class Cart extends \app\core\Controller {

    // public function __construct() {
    //     $this->cartModel = new \app\models\CartDetails();
    // }

    public function addToCart($product_id) {
        $cart2 = new \app\models\Cart();
        $cart = new \app\models\CartDetails();
        $cart2 = $cart2->getByProfileId(($_SESSION['profile_id']));

        // echo $_SESSION['profile_id'];
        // var_dump($cart2);
        
        $cart->cart_id = $cart2->cart_id;
        $cart->product_id = $product_id;
        var_dump($cart);
        $cart->insert();
    }

    // public function removeFromCart($productId) {
    //     $this->cartModel->delete($productId);
    // }

    // public function updateItemAmounts($productId, $newAmount) {
    //     $this->cartModel->update($productId, $newAmount);
    // }

    public function viewCart() {
        $cartModel = new \app\models\CartDetails();
        $cartItems = $cartModel->getCartItems();
        $this->view('Cart/index', $cartItems);
    }
}