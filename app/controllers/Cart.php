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

    public function updateItemAmounts(){
        
    }
}