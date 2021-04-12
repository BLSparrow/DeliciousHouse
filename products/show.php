<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$id = $_GET['id'] ?? 1;

$product = $dataProd->getOneProduct($id);
include $_SERVER['DOCUMENT_ROOT'] . '/products/show.view.php';