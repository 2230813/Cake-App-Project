<?php
namespace app\controllers;

//applying the Login condition to the whole class
#[\app\filters\Login]
class Admin extends \app\core\Controller {
    public function dashboard() {
        // Ensure the user is authenticated and authorized
        if ($_SESSION['username'] !== 'Admin' || !isset($_SESSION['user_id'])) {
            header('location:/User/login');
            exit;
        }

        $this->view('Admin/admin_dashboard');
    }
}
