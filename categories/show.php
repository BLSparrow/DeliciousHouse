<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$id = $_GET['id'] ?? 1;

$category = $dataCategory->getOneCategory($id);
$countries = $dataCountry->getAllCountry();

include $_SERVER['DOCUMENT_ROOT'] . '/categories/show.view.php';