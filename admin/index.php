<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
//if ($_SESSION['role'] == 'admin') {
//    header('Location: /admin');
//
//} else {
//    header('Location: /');
//}

include $_SERVER['DOCUMENT_ROOT'] . '/admin/index.view.php';

