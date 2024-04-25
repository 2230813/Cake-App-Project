<?php
namespace app\controllers;

// Apply the Login condition to the whole class
//#[\app\filters\Login]
class Order extends \app\core\Controller {

    //#[\app\filters\Login]

    public function delete($order_id){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
			$publication = new \app\models\Order();
			$publication = $publication->get($order_id);
			$publication->remove();
			//header('location:/Publication/seeUserPost/' . $publication->profile_id);
			
		}
    }

    public function getAllOrder($profile_id){
        $publication = new \app\models\Order();
		$publication = $publication->getAll($profile_id);
		
        //$this->view('Publication/main',$publication);
    }

    

}