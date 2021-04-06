<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$id = $_GET['id'] ?? 1;
$product = $dataProd->getOneProduct($id);
$countries = $dataCountry->getAllCountry();
$categories = $dataCategory->getAllCategories();

include $_SERVER['DOCUMENT_ROOT'] . '/products/edit.view.php';