<?php
namespace app\controllers;

// Apply the Login condition to the whole class
#[\app\filters\Login]
// #[\app\filters\HasProfile]
class Order extends \app\core\Controller {

    public function delete($cart_id){
			$order = new \app\models\Order();
			$order = $order->getOrder($cart_id);
			$order->delete();
			header('location:/Profile/index');
    }


    public function seeOrder($cart_id){
        $order = new \app\models\Order();
        $order = $order->getOrder($cart_id);

        $cartDetails = new \app\models\CartDetails();
        $cartDetails->cart_id = $order->cart_id;
        $cartDetails = $cartDetails->getCartItems();

        $this->view('Order/seeOrder', [
            'order' => $order,
            'cartDetails' => $cartDetails
        ]);
    }

    // public function placeOrder(){
    //         $order = new \app\models\Order();
    //         $cart = new \app\models\Cart();
    //         $cart = $cart->getByProfileId(($_SESSION['profile_id']));

    //         $order->cart_id = $cart->cart_id;
    //         $order->profile_id = $_SESSION['profile_id'];

    //         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //             $order->options = $_POST['delivery'];
    //             $order->insert($_SESSION['profile_id']);
    //             header('location:/Profile/index');
    //         }
            
        
    // }

    public function manage(){
        $orders = new \app\models\Order();
        $orders = $orders->getAll();

        $this->view('Product Management/adminOrder', $orders);
    }

    public function adminView($cart_id){
        $cartItems = new \app\models\CartDetails();
        $cartItems->cart_id = $cart_id;
        $cartItems = $cartItems->getCartItems();

        $order = new \app\models\Order();
        $order = $order->getOrder($cart_id);

        $this->view('Product Management/adminOrderView', [
            'order' => $order,
            'cartItems' => $cartItems
        ]);
    }

    public function adminEdit($cart_id){
        $cartItems = new \app\models\CartDetails();
        $cartItems->cart_id = $cart_id;
        $cartItems = $cartItems->getCartItems();

        $order = new \app\models\Order();
        $order = $order->getOrder($cart_id);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $order->status = $_POST['status'];
            $order->updateStatus();

            header('location:/Order/manage');

        }else{
            $this->view('Product Management/adminOrderEdit', [
            'order' => $order,
            'cartItems' => $cartItems
        ]);
        }
        
    }

    public function adminDelete($cart_id){
        $order = new \app\models\Order();
		$order = $order->getOrder($cart_id);
		$order->delete();
		header('location:/Order/manage');
    }

}