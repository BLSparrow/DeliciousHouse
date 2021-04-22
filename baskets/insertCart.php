<?php

use APP\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {
    $data['product_id'] = $_POST['product_id'];
    $data['quantity'] = $_POST['quantity'];


    if (empty($error)) {
        $data['image'] = $fileName;
        $dataCart->addCart($data);
        header('Location:/baskets');
    } else {
        header('Location: /baskets');
    }

}