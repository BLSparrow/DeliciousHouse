<?php

use APP\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {
    $data['name_product'] = Validator::preProcessing($_POST['name_product']);
    $data['description_product'] = Validator::preProcessing($_POST['description_product']);
    $data['image_product'] = Validator::preProcessing($_POST['image_product']);
    $data['numberOfServings'] = Validator::preProcessing($_POST['numberOfServings']);
    $data['weight'] = Validator::preProcessing($_POST['weight']);
    $data['price'] = Validator::preProcessing($_POST['price']);

    [$error, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image');

    if (empty($error)) {
        $_SESSION['msg'] = 'Файл успешно создан';
        $_SESSION['alert'] = 'alert-success';
        $data['image'] = $fileName;
        $dataProd->addProduct($data);
        header('Location:/products');
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /products/new.php');
    }

}