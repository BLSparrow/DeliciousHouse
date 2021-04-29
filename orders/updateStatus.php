<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['update'])) {

    if ($_POST['status_id'] == 2) {
        $dataOrder->deleteBasket($_POST['id']);
        $dataOrder->deleteOrder($_POST['id']);
        header('Location: /orders/index.php');
    } else {
        $data['status_id'] = $_POST['status_id'];
        $data['id'] = $_POST['id'];
        $dataOrder->updateStatus($data);
        header('Location: /orders/index.php');
    }
}