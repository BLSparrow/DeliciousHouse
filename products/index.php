<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$products = $dataProd->getAllProducts();

include $_SERVER['DOCUMENT_ROOT'] . '/products/products.view.php';