<?php

namespace App\Septillion\Controllers;
use Septillion\Classes\User;
require __DIR__ .'/../../vendor/autoload.php';

header('Content-Type: application/json');
// if(isset($_COOKIE['login_status'])) header('location:index.php');
if(isset($_POST['email'], $_POST['username'], $_POST['password']) && !empty($_POST['password'])) {
    $user = new User();
    $user->login($_POST['email'], $_POST['username'], $_POST['password']);
} else {
    echo json_encode(
        [
            'status' => 'fail',
            'message' => 'please specify all parameteres'
        ]
    );
}