<?php
namespace app\models;

use PDO;

Class Payment extends \app\core\Model{

    public $payment_id;//PK
    public $profile_id;//FK
    public $name;
    public $card_number;
    public $expire_date;

    public function get($profile_id) {
        $SQL = "SELECT * FROM payment WHERE profile_id = :profile_id";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['profile_id'=>$profile_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Payment');
        return $STMT->fetchAll();
    }

    public function update(){
        $SQL = 'UPDATE payment SET name=:name,card_number=:card_number,expire_date=:expire_date WHERE profile_id = :profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$this->profile_id,
			'name'=>$this->name,
			'card_number'=>$this->card_number,
            'expire_date'=>$this->expire_date
            ]
		);
    }

    public function insert() {
        $SQL = 'INSERT INTO payment (profile_id, name, card_number, expire_date) VALUES (:profile_id, :name, :card_number, :expire_date)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'profile_id' => $this->profile_id,
            'name' => $this->name,
            'card_number' => $this->card_number,
            'expire_date' => $this->expire_date
        ]);
        $this->payment_id = self::$_conn->lastInsertId();
    }
}