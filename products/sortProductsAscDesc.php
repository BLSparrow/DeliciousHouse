<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';


if (isset($_POST['desc'])) {
    $products = $dataProd->getAllProductsWithCountryDesc();
}
elseif (isset($_POST['asc'])){
    $products = $dataProd->getAllProductsWithCountryAsc();
}

include $_SERVER['DOCUMENT_ROOT'] . '/templates/allProducts.php';