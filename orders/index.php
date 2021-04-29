<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$orders = $dataOrder->getAllOrders();
$statuses = $dataOrder->getStatuses();

include $_SERVER['DOCUMENT_ROOT'] . '/orders/orders.view.php';