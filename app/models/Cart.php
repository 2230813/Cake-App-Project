<?php
namespace app\models;

use PDO;

class Cart extends \app\core\Model{
	public $cart_id;
	public $profile_id;
	public $total_price;

	
	public function insert(){
		//define the SQL query
		$SQL = 'INSERT INTO cart (cart_id, profile_id) VALUES (:cart_id, :profile_id)';
		//prepare the statement
		$STMT = self::$_conn->prepare($SQL);
		//execute
		$data = ['cart_id' => $this->cart_id,
				'profile_id' => $this->profile_id];
		$STMT->execute($data);
	}
    

	//get
    /*
	public function get($username){
		$SQL = 'SELECT * FROM user WHERE username = :username';//define the SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['username' => $username]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

	public function getById($user_id){
		$SQL = 'SELECT * FROM user WHERE user_id = :user_id';//define the SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['user_id' => $user_id]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}
    */

    /*
	//update
	public function update($product_id, $new_quantity){
        $SQL = 'UPDATE cart SET quantity = :new_quantity WHERE cart_id = :cart_id AND product_id = :product_id';
        // Prepare the statement
        $STMT = self::$_conn->prepare($SQL);
        // Execute
        $STMT->execute([
            'cart_id' => $this->cart_id,
            'product_id' => $product_id,
            'new_quantity' => $new_quantity
        ]);
	}


	//delete - this is a special delete to deactivate accounts
	function delete($product_id){
		$SQL = 'DELETE FROM cart WHERE cart_id = :cart_id AND product_id = :product_id';
        // Prepare the statement
        $STMT = self::$_conn->prepare($SQL);
        // Execute
        $STMT->execute([
            'cart_id' => $this->cart_id,
            'product_id' => $product_id
        ]);
	}
    */
}