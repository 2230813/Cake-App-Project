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
        $cart2 = $cart2->getByProfileId(($_SESSION['profile_id']));
        $cart = new \app\models\CartDetails();
        
        // echo $_SESSION['profile_id'];
        // var_dump($cart2);
        
        $cart->cart_id = $cart2->cart_id;
        $cart->product_id = $product_id;
        //var_dump($cart);
        $cart->insert();

        header('location:/Cart/index');
    }

    // public function removeFromCart($productId) {
    //     $this->cartModel->delete($productId);
    // }
    public function removeFromCart($productId) {
        $cartModel = new \app\models\CartDetails();
        $cartModel->delete($productId);
        // Redirect back to the cart page after removing the product
        header('location:/Cart/viewCart');
    }

    // public function updateItemAmounts($productId, $newAmount) {
    //     $this->cartModel->update($productId, $newAmount);
    // }

    public function viewCart() {
        $cart2 = new \app\models\Cart();
        $cart2 = $cart2->getByProfileId(($_SESSION['profile_id']));
        $cartModel = new \app\models\CartDetails();
        $cartModel->cart_id = $cart2->cart_id;
        $cartItems = $cartModel->getCartItems();
        //var_dump($cartItems);
        $this->view('Cart/index', $cartItems);
    }
}