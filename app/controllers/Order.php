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
			$order->remove();
			//header('location:/order/seeUserPost/' . $order->profile_id);
			
		}
    }

    public function getAllOrder($profile_id){
        $order = new \app\models\Order();
		$order = $order->getAll($profile_id);
		
        $this->view('Profile/Order',$order);
    }



}