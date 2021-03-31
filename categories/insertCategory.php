<?php

use APP\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {
    $data['name_category'] = Validator::preProcessing($_POST['name_category']);
    $data['description_category'] = Validator::preProcessing($_POST['description_category']);
    $data['image_category'] = Validator::preProcessing($_POST['image_category']);

    [$error, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image_category');

    if (empty($error)) {
        $_SESSION['msg'] = 'Файл успешно создан';
        $_SESSION['alert'] = 'alert-success';
        $data['image_category'] = $fileName;
        $dataCategory->addCategory($data);
        header('Location:/admin');
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /categories/new.php');
    }

}