<?php

use APP\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {
    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['description'] = Validator::preProcessing($_POST['description']);
    $data['image'] = Validator::preProcessing($_POST['image']);

    [$error, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image');

    if (empty($error)) {
        $_SESSION['msg'] = 'Файл успешно создан';
        $_SESSION['alert'] = 'alert-success';
        $data['image'] = $fileName;
        $dataCategory->addCategory($data);
        header('Location:/categories');
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /categories/new.php');
    }

}