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

        $product = new \app\models\Product();
        $product = $product->get($product_id);
        
        // echo $_SESSION['profile_id'];
        // var_dump($cart2);
        
        $cart->cart_id = $cart2->cart_id;
        $cart->product_id = $product_id;
        //var_dump($cart);
        $cart->insert();
        
        $cart2->total_price += $product->price;
        $cart2->update();

        header('location:/Cart/index');
    }

    public function removeFromCart($product_id) {
        $cart2 = new \app\models\Cart();
        $cart2 = $cart2->getByProfileId(($_SESSION['profile_id']));
        $cartModel = new \app\models\CartDetails();
        $cartModel->cart_id = $cart2->cart_id;
        $cartModel->delete($product_id);

        $product = new \app\models\Product();
        $product = $product->get($product_id);

        $cart2->total_price -= $product->price;
        $cart2->update();

        // Redirect back to the cart page after removing the product
        header('location:/Cart/index');
    }

    // public function updateItemAmounts($productId, $newAmount) {
    //     $this->cartModel->update($productId, $newAmount);
    // }

    public function viewCart() {
        $cart = new \app\models\Cart();
        $cart = $cart->getByProfileId(($_SESSION['profile_id']));
        
        $cartModel = new \app\models\CartDetails();
        $cartModel->cart_id = $cart->cart_id;
        $cartItems = $cartModel->getCartItems();
        //var_dump($cartItems);
        
        $this->view('Cart/index', [
            'cartItems' => $cartItems,
            'cart' => $cart
        ]);
    }

    public function checkout(){
        $cart2 = new \app\models\Cart();
        $cart2 = $cart2->getByProfileId(($_SESSION['profile_id']));
        
        $cartModel = new \app\models\CartDetails();
        $cartModel->cart_id = $cart2->cart_id;
        $cartItems = $cartModel->getCartItems();

        $payments = new \app\models\Payment();
		$payments = $payments->get($_SESSION['profile_id']);

        $profile = new \app\models\Profile();
        $profile = $profile->getForUser($_SESSION['user_id']);

        $this->view('Cart/checkout', [
            'cartItems' => $cartItems,
            'profile' => $profile,
            'payments' => $payments,
            'cart' => $cart2
        ]);
        
    }
}