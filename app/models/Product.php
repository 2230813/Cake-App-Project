<?php
namespace app\models;
// models/Products.php

use PDO;

class Product extends \app\core\Model{
    public $product_id;
    public $name;
    public $type;
    public $price;
    public $details;
    public $quantity;
    public $image_path;

    // CRUD

    // Create
    public function insert() {
        $SQL = 'INSERT INTO product(name, type, price, details, quantity, image_path) 
                VALUES (:name, :type, :price, :details, :quantity, :image_path)';
        $STMT = self::$_conn->prepare($SQL);
        
        $imagePath = $this->image_path ?? NULL; // Use NULL if $this->image_path is not set
        
        $STMT->execute([
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
            'details' => $this->details,
            'quantity' => $this->quantity,
            'image_path' => $imagePath
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
        $SQL = 'UPDATE product SET name=:name, type=:type, price=:price, details=:details, quantity=:quantity, image_path=:image_path WHERE product_id = :product_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'product_id' => $this->product_id,
            'name' => $this->name,
            'type' => $this->type,
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

    public function searchProducts($searchTerm) {
        $SQL = "SELECT * FROM product WHERE name LIKE :searchTerm ORDER BY name";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['searchTerm' => '%' . $searchTerm . '%']);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }
    
    public function getAllWithRatings(){
        $SQL = 'SELECT p.*, COALESCE(AVG(r.rating), 0) as average_rating FROM product p
                LEFT JOIN review r ON p.product_id = r.product_id
                GROUP BY p.product_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }

    public function getByType($type) {
        $SQL = 'SELECT * FROM product WHERE type = :type';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['type' => $type]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }
    
}
