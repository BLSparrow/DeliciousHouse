<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';




if (isset($_GET['id'])) {
    $products = $dataCategory->getProductsForCategory($_GET['id']);
    if (!$products) {
        $_SESSION['msg'] = 'Товаров в такой категории нет!';
        $_SESSION['alert'] = 'alert-danger';
        $_SESSION['danger'] = 'dangerOn';
    } else {
        $_SESSION['msg'] = 'Вот ваши товары!!!';
        $_SESSION['alert'] = 'alert-success';
        $_SESSION['danger'] = 'dangerOff';
    }
}

include $_SERVER['DOCUMENT_ROOT'] . '/templates/allProducts.php';