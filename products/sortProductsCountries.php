<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';


if (isset($_GET['id'])) {
    $products = $dataCountry->getProductsForCountry($_GET['id']);
    if (!$products) {
        $_SESSION['msg'] = '';
        $_SESSION['alert'] = 'alert-danger';
        $products = $dataProd->getAllProductsWithCountry();
    } else {
        $_SESSION['msg'] = '';
        $_SESSION['alert'] = 'alert-success';
    }
}

include $_SERVER['DOCUMENT_ROOT'] . '/templates/allProducts.php';