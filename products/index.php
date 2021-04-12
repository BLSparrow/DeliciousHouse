<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';


$products = $dataProd->getAllProducts();
$categories = $dataCategory->getAllCategories();


if (isset($_GET['searchButton'])) {
    $id = $_GET['filterCategory_id'];
    $products = $dataCategory->getProductsForCategory($id);
    if(!$products) {
        $product = $dataProd->getAllProducts();
        $_SESSION['msg'] = 'Товаров в такой категории нет!';
        $_SESSION['alert'] = 'alert-danger';
        $_SESSION['danger'] = 'dangerOn';
    }else{
        $_SESSION['msg'] = 'Вот ваши товары!!!';
        $_SESSION['alert'] = 'alert-success';
        $_SESSION['danger'] = 'dangerOff';
    }
}

include $_SERVER['DOCUMENT_ROOT'] . '/products/products.view.php';