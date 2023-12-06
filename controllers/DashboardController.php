<?php
require_once 'Models/User.php';

class DashboardController
{
    public function index()
    {
        if (isset($_SESSION['role_user']) && $_SESSION['role_user'] === 1) {
            view('dashboard/index', ['page' => 'dashboard']);
        } else {
            echo '403 - Access ditolak, anda bukan admin';
        }
    }

    public function user()
    {
        $user = new User();

        $users = json_decode($user->findAll(), true);

        view('dashboard/index', ['users' => $users, 'page' => 'user']);
    }

    public function produk(){
        view('dashboard/index', ['page' => 'produk']);
    }
}
?>