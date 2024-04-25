<?php
namespace app\models;

use PDO;

Class Order extends \app\core\Model{
    public $orderID;//PK
    public $date;
    public $status;
    public $totalAmount;
    public $profile_id;//FK


    public function get($order_id) {
        $SQL = "SELECT * FROM order WHERE orderID = :orderID";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['orderID'=>$order_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Order');
        return $STMT->fetch();
    }

    public function getAll($profile_id){
        $SQL = "SELECT * FROM order WHERE profile_id = :profile_id";
            $STMT = self::$_conn->prepare($SQL);
            $STMT->execute(['profile_id'=>$profile_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Order');
            return $STMT->fetchAll();
    }

    public function cancelOrder($order_id){
        $SQL = "DELETE FROM order WHERE order_id = :order_id";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(["order_id" => $this->orderID]);
    }
}