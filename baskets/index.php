<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';


if (isset($_GET['id']) && $_GET['id'] !== null) {
    $_SESSION['basket_id'][] = $_GET['id'];
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
foreach ($_SESSION['basket_id'] as $v) {
    $carts[] = $dataCart->getFullCart($v);
}
//unset($_SESSION['basket_id']);

//var_dump($_SESSION['basket_id']);
//var_dump($carts);

include $_SERVER['DOCUMENT_ROOT'] . '/baskets/index.view.php';