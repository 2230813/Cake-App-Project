<?php
namespace app\models;

use PDO;

class CartDetails extends \app\core\Model{
    public $cart_id;
    public $product_id;

    public function insert(){
        
            // Define the SQL query to insert into the cart table
            $insertSQL = 'INSERT INTO cartDetails (cart_id, product_id) VALUES (:cart_id, :product_id)';
            // Prepare the statement
            $insertSTMT = self::$_conn->prepare($insertSQL);
            // Execute
            $insertSTMT->execute([
                'cart_id' => $this->cart_id,
                'product_id' => $this->product_id
            ]);
    }


    public function update($product_id, $new_quantity){
        $SQL = 'UPDATE cart SET quantity = :new_quantity WHERE cart_id = :cart_id AND product_id = :product_id';
        // Prepare the statement
        $STMT = self::$_conn->prepare($SQL);
        // Execute
        $STMT->execute([
            'cart_id' => $this->cart_id,
            'product_id' => $product_id,
            //'new_quantity' => $new_quantity
        ]);
	}


	//delete - this is a special delete to deactivate accounts
	function delete($product_id){
		$SQL = 'DELETE FROM cart WHERE product_id = :product_id';
        // Prepare the statement
        $STMT = self::$_conn->prepare($SQL);
        // Execute
        $STMT->execute([
            'product_id' => $product_id
        ]);
	}


    public function getCartItems() {
        // Defining the SQL query to select cart items along with product information
        $SQL = 'SELECT * FROM product 
                INNER JOIN cartDetails cd ON product.product_id = cd.product_id 
                WHERE cd.cart_id = :cart_id';
        // Prepare the statement
        $STMT = self::$_conn->prepare($SQL);
        // Execute
        $STMT->execute(['cart_id' => $this->cart_id]);
        // Fetch the data
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Product');
        return $STMT->fetchAll();
    }
    
}