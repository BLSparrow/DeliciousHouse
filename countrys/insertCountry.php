<?php

use APP\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {
    $data['country'] = Validator::preProcessing($_POST['country']);
    $data['image_country'] = Validator::preProcessing($_POST['image_country']);

    [$error, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image_country');

    if (empty($error)) {
        $_SESSION['msg'] = 'Файл успешно создан';
        $_SESSION['alert'] = 'alert-success';
        $data['image_country'] = $fileName;
        $dataCountry->addCountry($data);
        header('Location:/admin');
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /countrys/new.php');
    }

}