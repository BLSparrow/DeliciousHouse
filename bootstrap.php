<?php

use App\BD\Connect;
use App\Models\Product;
use App\Models\Auth;
use App\Models\Validator;

include $_SERVER['DOCUMENT_ROOT'] . '/BD/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/BD/Connect.php';
include $_SERVER['DOCUMENT_ROOT'] . '/BD/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Product.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Auth.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Validator.php';

$user = isset($_SESSION['auth']) && $_SESSION['auth'] ? json_decode($_SESSION['user']) : false;
$dataProd = new Product(Connect::make(CONN));
$dataAuth = new Auth(Connect::make(CONN));
$dataValid = new Validator;