<?php
namespace app\controllers;

// Apply the Login condition to the whole class
//#[\app\filters\Login]
class Payment extends \app\core\Controller {

    //#[\app\filters\Login]

    //public function get($profile_id){
       // $payment = new \app\models\Payment();
		//$payment = $payment->get($_SESSION['user_id']);

   // }

    public function modify(){
        $payment = new \app\models\Payment();
		$payment = $payment->get($_SESSION['user_id']);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $payment->name = $_POST['name'];
            $payment->card_number = $_POST['card_number'];
            $payment->expire_date = $_POST['expire_date'];

            $payment->update();

            header('location:/Profile/index');
        }
    }
}