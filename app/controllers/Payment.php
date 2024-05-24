<?php
namespace app\controllers;

// Apply the Login condition to the whole class
//#[\app\filters\Login]
class Payment extends \app\core\Controller {

        public function add() {
            $payment = new \app\models\Payment();

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $payment->profile_id = $_SESSION['profile_id'];
                $payment->name = $_POST['name'];
                $payment->card_number = $_POST['card_number'];
                $payment->expire_date = $_POST['expire_date'];

                $payment->insert();

                header('location:/Profile/index');
            } else {
                $this->view('Profile/add_payment');
            }
        }

        public function edit() {
            $payment = new \app\models\Payment();
            $payments = $payment->get($_SESSION['profile_id']);

            // Assuming there's only one payment record for simplicity
            $payment = $payments[0] ?? null;

            if ($payment === null) {
                header('location:/Profile/add');
                return;
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $payment->name = $_POST['name'];
                $payment->card_number = $_POST['card_number'];
                $payment->expire_date = $_POST['expire_date'];

                $payment->update();

                header('location:/Profile/index');
            } else {
                $this->view('Profile/edit_payment', ['payment' => $payment]);
            }
        }
}
    
