<?php
namespace Colors\Controllers;

use Colors\App;
//use Colors\FileWriter;
use Colors\Messages;
use Colors\OldData;

class LoginController
{
    public function index()
    {
        $old = OldData::getFlashData();

        return App::view('auth\index', [
            'pageTitle' => 'Login',
            'inLogin' => true,
            'old' => $old,
        ]);
    }

    public function login(array $data)
    {
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';


        $user = App::get('users')->getUserByEmailAndPass($email, $password);
        if ($user) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $user['name'];
            Messages::addMessage('success', 'You are logged in');
            header('Location: /');
            die;
        }


        Messages::addMessage('danger', 'Wrong email or password');
        OldData::flashData($data);
        header('Location: /login');
        die;
    }

    public function logout()
    {
        unset($_SESSION['email']);
        unset($_SESSION['name']);
        Messages::addMessage('success', 'You are logged out');
        header('Location: /');
        exit;
    }
}