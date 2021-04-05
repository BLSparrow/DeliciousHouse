<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$products = $dataProd->getAllProducts();
$categories = $dataCategory->getAllCategories();

include $_SERVER['DOCUMENT_ROOT'] . '/products/products.view.php';