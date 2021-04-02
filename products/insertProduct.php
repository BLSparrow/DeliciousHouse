<?php

use APP\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {
    $data['category_id'] = $_POST['category_id'];
    $data['country_id'] = $_POST['country_id'];

    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['description'] = Validator::preProcessing($_POST['description']);

    $data['numberOfServings'] = $_POST['numberOfServings'];
    $data['weight'] = $_POST['weight'];
    $data['price'] = $_POST['price'];

    [$error, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image');

    if (empty($error)) {
        $_SESSION['msg'] = 'Файл успешно создан';
        $_SESSION['alert'] = 'alert-success';
        $data['image_product'] = $fileName;

        $dataProd->addProduct($data);
        header('Location:/categories/show.php');
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /products/new.php');
    }

}