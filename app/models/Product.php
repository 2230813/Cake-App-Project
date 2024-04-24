<?php
namespace app\models;

use PDO;

class Product extends \app\core\Model{
    public $product_id;
    public $name;
    public $price;
    public $details;
    public $quantity;
    public $image_path;

    // CRUD

    // Create
    public function insert(){
        $SQL = 'INSERT INTO product(name, price, details, quantity, image_path) 
                        VALUES (:name, :price, :details, :quantity, :image_path)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'name' => $this->name,
            'price' => $this->price,
            'details' => $this->details,
            'quantity' => $this->quantity,
            'image_path' => $this->image_path
        ]);
        $this->product_id = self::$_conn->lastInsertId(); // Get the last inserted ID if needed
    }

    // Read single product
    public function get($product_id){
        $SQL = 'SELECT * FROM product WHERE product_id = :product_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['product_id' => $product_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetch();
    }

    // Read all products
    public function getAll(){
        $SQL = 'SELECT * FROM product';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }

    // Update
    public function update(){
        $SQL = 'UPDATE product SET name=:name, price=:price, details=:details, quantity=:quantity, image_path=:image_path WHERE product_id = :product_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'product_id' => $this->product_id,
            'name' => $this->name,
            'price' => $this->price,
            'details' => $this->details,
            'quantity' => $this->quantity,
            'image_path' => $this->image_path
        ]);
    }

    // Delete
    public function delete(){
        $SQL = 'DELETE FROM product WHERE product_id = :product_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['product_id' => $this->product_id]);
    }
}
