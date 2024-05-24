<?php
namespace app\controllers;

class Review extends \app\core\Controller {

    public function save() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $review = new \app\models\Review();
            $review->product_id = $_POST['product_id'];
            $review->user_id = $_SESSION['user_id'];
            $review->rating = $_POST['rating'];
            $review->comment = $_POST['comment'];

            if (isset($_POST['review_id']) && !empty($_POST['review_id'])) {
                // Update existing review
                $review->review_id = $_POST['review_id'];
                $review->update();
            } else {
                // Create new review
                $review->insert();
            }

            echo json_encode(['success' => true]);
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $review = new \app\models\Review();
            $review->review_id = $_POST['review_id'];
            $review->user_id = $_SESSION['user_id'];
            $review->delete();

            echo json_encode(['success' => true]);
        }
    }

    public function manage() {
        $review = new \app\models\Review();
        $review = $review->getAllReviews();

        $this->view('Product Management/adminReviewView', $review);
    }

    public function adminDelete($review_id) {
        $review = new \app\models\Review();
        $review = $review->getById($review_id);
        $review->delete();
        header('location:/Review/manage');
    }

}
