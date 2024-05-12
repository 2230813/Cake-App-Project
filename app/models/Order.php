<?php
namespace app\models;

use PDO;

Class Order extends \app\core\Model{
    public $orderID;//PK
    public $date;
    public $status;
    public $totalAmount;
    public $user_id;//FK


    public function get($order_id) {
        $SQL = "SELECT * FROM orders WHERE orderID = :orderID";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['orderID'=>$order_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Order');
        return $STMT->fetch();
    }

    public function getAll($user_id){
        $SQL = "SELECT * FROM orders WHERE user_id = :user_id";
            $STMT = self::$_conn->prepare($SQL);
            $STMT->execute(['user_id'=>$user_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Order');
            return $STMT->fetchAll();
    }

    public function cancelOrder($order_id){
        $SQL = "DELETE FROM orders WHERE order_id = :order_id";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(["order_id" => $this->orderID]);
    }
}