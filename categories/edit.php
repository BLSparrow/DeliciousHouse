<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$id = $_GET['id'] ?? 1;
$category = $dataCategory->getOneCategory($id);

include $_SERVER['DOCUMENT_ROOT'] . '/categories/edit.view.php';