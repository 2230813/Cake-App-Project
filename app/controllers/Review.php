<?php
namespace app\controllers;

class Review extends \app\core\Controller {

    // Function to display reviews for a specific product
    public function index($product_id) {
        $reviewModel = new \app\models\Review();
        $reviews = $reviewModel->getReviewsByProduct($product_id);
        $this->view('Review/index', ['reviews' => $reviews, 'product_id' => $product_id]);
    }

    // Function to create a new review
    public function create($product_id) {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /User/login');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $review = new \app\models\Review();
            $review->product_id = $product_id;
            $review->user_id = $_SESSION['user_id'];
            $review->rating = $_POST['rating'];
            $review->comment = $_POST['comment'];
            $review->insert();
            header("Location: /Review/index/$product_id");
            exit;
        } else {
            $this->view('Review/create', ['product_id' => $product_id]);
        }
    }

    // Function to edit a review
    public function modify($review_id) {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /User/login');
            exit;
        }

        $reviewModel = new \app\models\Review();
        $review = $reviewModel->getById($review_id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $review->rating = $_POST['rating'];
            $review->comment = $_POST['comment'];
            $review->update();
            header("Location: /Review/index/{$review->product_id}");
            exit;
        } else {
            $this->view('Review/modify', ['review' => $review]);
        }
    }

    // Function to delete a review
    public function delete($review_id) {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /User/login');
            exit;
        }

        $review = new \app\models\Review();
        $review->review_id = $review_id;
        $review->user_id = $_SESSION['user_id'];
        $review->delete();
        header("Location: /Review/index/{$review->product_id}");
        exit;
    }
}
