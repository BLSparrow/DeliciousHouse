<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
session_start();

$countries = $dataCountry->getAllCountry();
$categories = $dataCategory->getAllCategories();

include $_SERVER['DOCUMENT_ROOT'] . '/products/new.view.php';