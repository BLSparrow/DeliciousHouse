<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';


$products = $dataProd->getAllProducts();
$categories = $dataCategory->getAllCategories();


if (isset($_GET['searchButton'])) {
    $id = $_GET['filterCategory_id'];
    $products = $dataCategory->getProductsForCategory($id);
    if(!$products) {
        $product = $dataProd->getAllProducts();
    }
}

include $_SERVER['DOCUMENT_ROOT'] . '/products/products.view.php';