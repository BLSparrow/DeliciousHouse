<?php

use APP\Models\Validator;

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {
    unset($_SESSION['errors']['register']);
    $login = Validator::preProcessing($_POST['login']);
    $password = Validator::preProcessing($_POST['password']);
    $role = Validator::preProcessing($_POST['role']);
    if (Validator::validLength('Login', $login, 'login', 2) &
        Validator::validLength('Password', $password, 'password') &
        Validator::validLength('Role', $role, 'role')
    ) {
        $id_user = $dataAuth->register($id_user, $login, $password, $role);
        if ($id_user == -1) {
            $_SESSION['errors']['register'] = 'Пользователь с такими данными уже зарегестрирован в системе!';
        } elseif ($id_user > 0) {
            $_SESSION['user'] = json_encode($dataAuth->find($id_user), JSON_UNESCAPED_UNICODE);
            $_SESSION['auth'] = true;
            header('Location: /admin');
            die();
        } else {
            $_SESSION['errors']['register'] = 'Попытка зарегистрироваться в системе закончилась неудачей!';
        }
    }
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['role'] = $role;
    header('Location: /register');
}