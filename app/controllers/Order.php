<?php
namespace app\controllers;

// Apply the Login condition to the whole class
//#[\app\filters\Login]
class Order extends \app\core\Controller {

    //#[\app\filters\Login]

    public function delete($order_id){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
			$order = new \app\models\Order();
			$order = $order->get($order_id);
			$order->cancelOrder($order_id);
			header('location:/Order/order_list/' . $order->order_id);
			
		}
    }

    public function getAllOrder($user_id){
        $order = new \app\models\Order();
		$order = $order->getAll($user_id);
		
        $this->view('Order/order_list',$order);
    }

    public function seeOrder($order_id){
        $order = new \app\models\Order();
        $order = $order->get($order_id);

        $this->view('Order/seeOrder', $order);
    }

    public function placeOrder(){
        $order = new \app\models\Order();
        $cart = new \app\models\Cart();
        $cart = $cart->getByProfileId(($_SESSION['profile_id']));

        $order->cart_id = $cart->cart_id;
        $order->insert($_SESSION['profile_id']);


    }

}