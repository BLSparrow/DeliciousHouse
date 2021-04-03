<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$categories = $dataCategory->getAllCategories();

include $_SERVER['DOCUMENT_ROOT'] . '/templates/sidebar.view.php';