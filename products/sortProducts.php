<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';


if (isset($_GET['id'])) {
    $products = $dataCategory->getProductsForCategory($_GET['id']);
    if (!$products) {
        $_SESSION['msg'] = '';
        $_SESSION['alert'] = 'alert-danger';
//        $_SESSION['danger'] = 'dangerOn';
        $products = $dataProd->getAllProductsWithCountry();
    } else {
        $_SESSION['msg'] = '';
        $_SESSION['alert'] = 'alert-success';
//        $_SESSION['danger'] = 'dangerOff';
    }
}

include $_SERVER['DOCUMENT_ROOT'] . '/templates/allProducts.php';