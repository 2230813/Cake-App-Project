<?php
namespace app\controllers;

//applying the Login condition to the whole class
#[\app\filters\Login]
class Cart extends \app\core\Controller {

    public function addToCart($productid){
        $cart = new \app\models\CartDetails();
        $cart->product_id = $productid;
        $cart->insert();
    }

    public function removeFromCart($productid){
        $cart = new \app\models\CartDetails();
        $cart = $cart->getCartItems();
        $cart->product_id = $productid;
    }

    public function updateItemAmounts($productid, $newAmount){
        $cart = new \app\models\CartDetails();
        $cart = $cart->getCartItems();
        $cart->update($productid, $newAmount);
    }

    public function viewCart(){
        $cart = new \app\models\CartDetails();
        $cart = $cart->getCartItems();
        //Send to the proper view
        $this->view('Cart/index', $cart);
    }
}