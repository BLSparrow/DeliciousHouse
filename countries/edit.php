<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$id = $_GET['id'] ?? 1;
$country = $dataCountry->getOneCountry($id);

include $_SERVER['DOCUMENT_ROOT'] . '/countries/edit.view.php';