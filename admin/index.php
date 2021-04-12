<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if ($_SESSION['login'] == 'admin') {
    header('Location: /auth/index.php');

} else {
    header('Location: /');
}

include $_SERVER['DOCUMENT_ROOT'] . '/admin/index.view.php';