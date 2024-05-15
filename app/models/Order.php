<?php
namespace app\models;

use PDO;

Class Order extends \app\core\Model{
    public $order_id;//PK
    public $cart_id;//FK
    public $profile_id;
    public $date;
    public $status;
    public $options;

    public function insert($profile_id){
        //define the SQL query
		$SQL = 'INSERT INTO orders (cart_id, profile_id/*, options*/) VALUES (:cart_id, :profile_id/*, :options*/)';
		//prepare the statement
		$STMT = self::$_conn->prepare($SQL);
		//execute
		$data = ['cart_id' => $this->cart_id,
                 'profile_id'=> $this->profile_id/*,
    'options'=> $this->options*/];
		$STMT->execute($data);

        //updating cart status and making new cart for user
        $statusSQL = 'UPDATE cart SET status=:status WHERE cart_id = :cart_id';
        $statusSTMT = self::$_conn->prepare($statusSQL);
		$statusSTMT->execute(
			['cart_id'=>$this->cart_id,
             'status'=>'ordered']
		);

        $cartSQL = 'INSERT INTO cart(profile_id) VALUE (:profile_id)';
        $cartSTMT = self::$_conn->prepare($cartSQL);
        $cartSTMT->execute(['profile_id' => $profile_id]);

    }

    public function get($profile_id) {
        $SQL = "SELECT * FROM orders WHERE profile_id = :profile_id";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['profile_id'=>$profile_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Order');
        return $STMT->fetchAll();
    }

    public function getOrder($cart_id) {
        $SQL = "SELECT * FROM orders WHERE cart_id = :cart_id";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['cart_id'=>$cart_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Order');
        return $STMT->fetch();
    }

    public function getAll() {
        $SQL = "SELECT * FROM orders";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Order');
        return $STMT->fetchAll();
    }

    public function delete(){
		$SQL = 'DELETE FROM orders WHERE order_id = :order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$this->order_id]
		);
	}

}