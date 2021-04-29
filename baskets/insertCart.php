<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {

    $data['status_id'] = $_POST['status_id'];
    $data['delivery_method_id'] = $_POST['delivery_method_id'];
    $data['order_cost'] = $_POST['order_cost'];
    $data['name'] = $_POST['name'];
    $data['telephone'] = $_POST['telephone'];
    $data['address'] = $_POST['address'];

    $order_id = $dataOrder->addOrder($data);
    $dataCart->addManyCarts($order_id, $_SESSION['basket']);
    header('Location: /');
    unset($_SESSION['basket']);
}