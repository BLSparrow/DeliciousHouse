<?php
session_start();

use App\BD\Connect;
use App\Models\Product;
use App\Models\Auth;
use App\Models\Validator;
use App\Models\Category;
use App\Models\Country;
use APP\Models\Cart;
use APP\Models\Order;

include $_SERVER['DOCUMENT_ROOT'] . '/BD/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/BD/Connect.php';
include $_SERVER['DOCUMENT_ROOT'] . '/BD/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Product.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Auth.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Validator.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Category.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Country.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/ShowData.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Cart.php';
include $_SERVER['DOCUMENT_ROOT'] . '/APP/Models/Order.php';

$user = isset($_SESSION['auth']) && $_SESSION['auth'] ? json_decode($_SESSION['user']) : false;
$dataProd = new Product(Connect::make(CONN));
$dataAuth = new Auth(Connect::make(CONN));
$dataCategory = new Category(Connect::make(CONN));
$dataCountry = new Country(Connect::make(CONN));
$dataCart = new Cart(Connect::make(CONN));
$dataOrder = new Order(Connect::make(CONN));

$categories = $dataCategory->getAllCategories();
$countries = $dataCountry->getAllCountry();
$productsLimit = $dataProd->getAllProductsLimit();
$products = $dataProd->getAllProductsWithCountry();
$text1 = $dataProd->getOneText(1);
$text2 = $dataProd->getOneText(2);
$text3 = $dataProd->getOneText(3);
$text4 = $dataProd->getOneText(4);


$dataValid = new Validator;