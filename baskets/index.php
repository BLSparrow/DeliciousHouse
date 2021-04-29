<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$methods = $dataOrder->getDelivery_method();
$statuses = $dataOrder->getStatuses();

if (isset($_GET['id']) && $_GET['id'] !== null) {
    $_SESSION['basket'][$_GET['id']] = 1;
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
if ($_SESSION['basket']) {
    foreach ($_SESSION['basket'] as $k => $v) {
        $carts[] = $dataCart->getFullCart($k);
    }
}
include $_SERVER['DOCUMENT_ROOT'] . '/baskets/index.view.php';