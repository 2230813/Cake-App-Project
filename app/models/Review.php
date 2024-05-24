<?php
namespace app\models;

use PDO;

class Review extends \app\core\Model {
    public $review_id;
    public $product_id;
    public $user_id;
    public $rating;
    public $comment;

    // Insert a new review
    public function insert() {
        $SQL = 'INSERT INTO review (product_id, user_id, rating, comment) VALUES (:product_id, :user_id, :rating, :comment)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'product_id' => $this->product_id,
            'user_id' => $this->user_id,
            'rating' => $this->rating,
            'comment' => $this->comment
        ]);
    }

    // Get all reviews for a product
    public function getReviewsByProduct($product_id) {
        $SQL = 'SELECT r.*, u.username FROM review r JOIN user u ON r.user_id = u.user_id WHERE product_id = :product_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['product_id' => $product_id]);
        return $STMT->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get a review by its ID
    public function getById($review_id) {
        $SQL = 'SELECT * FROM review WHERE review_id = :review_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['review_id' => $review_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
        return $STMT->fetch();
    }

    // Update a review
    public function update() {
        $SQL = 'UPDATE review SET rating = :rating, comment = :comment WHERE review_id = :review_id AND user_id = :user_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'rating' => $this->rating,
            'comment' => $this->comment,
            'review_id' => $this->review_id,
            'user_id' => $this->user_id
        ]);
    }

    // Delete a review
    public function delete() {
        $SQL = 'DELETE FROM review WHERE review_id = :review_id AND user_id = :user_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'review_id' => $this->review_id,
            'user_id' => $this->user_id
        ]);
    }
}
