<?php
namespace app\models;

use PDO;

class Profile extends \app\core\Model{
	public $profile_id;//PK
	public $user_id;//FK
	public $first_name;
	public $last_name;
    public $address;
    public $phone_number;
    public $language_preference;

	//CRUD

	//create
	public function insert(){
		$SQL = 'INSERT INTO profile(profile_id,user_id,first_name,last_name,address,phone_number,language_preference) VALUE (:profile_id,:user_id,:first_name,:last_name,:address,:phone_number,:language_preference)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$this->profile_id,
			'user_id'=>$this->user_id,
			'first_name'=>$this->first_name,
			'last_name'=>$this->last_name,
            'address'=>$this->address,
            'phone_number'=>$this->phone_number,
            'language_preference'=>$this->language_preference
            ]
		);
		//This is to get the latest inserted profile_id
		$this->profile_id = self::$_conn->lastInsertId();

        //Creating a cart for the profile that was created
        $cartSQL = 'INSERT INTO cart(profile_id) VALUE (:profile_id)';
        $cartSTMT = self::$_conn->prepare($cartSQL);
        $cartSTMT->execute(['profile_id' => $this->profile_id]);
	}

	//read
	public function getForUser($user_id){
		$SQL = 'SELECT * FROM profile WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$user_id]
		);
		//there is a mistake in the next line
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\profile');//set the type of data returned by fetches
		return $STMT->fetch();//return (what should be) the only record
	}

	public function getAll(){
		$SQL = 'SELECT * FROM profile';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}

	public function getByName($name){//search
		$SQL = 'SELECT * FROM profile WHERE CONCAT(first_name,\' \',last_name) = :name';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['name'=>$name]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}


	//update
	//you can't change the user_id that's a business logic choice that gets implemented in the model
	public function update(){
		$SQL = 'UPDATE profile SET first_name=:first_name,last_name=:last_name,address=:address,phone_number=:phone_number,language_preference=:language_preference WHERE profile_id = :profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$this->profile_id,
			'first_name'=>$this->first_name,
			'last_name'=>$this->last_name,
            'address'=>$this->address,
            'phone_number'=>$this->phone_number,
            'language_preference'=>$this->language_preference
            ]
		);
	}

	//delete
	public function delete(){
		$SQL = 'DELETE FROM profile WHERE profile_id = :profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$this->profile_id]
		);
	}

	public function getProfileName($profile_id) {
		$SQL = "SELECT first_name FROM profile WHERE profile_id = :profile_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id' => $profile_id]);
		$result = $STMT->fetch();
	}

}