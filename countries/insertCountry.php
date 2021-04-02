<?php

use APP\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {
    $data['country'] = Validator::preProcessing($_POST['country']);
    $data['image'] = Validator::preProcessing($_POST['image']);

    [$error, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image');

    if (empty($error)) {
        $_SESSION['msg'] = 'Файл успешно создан';
        $_SESSION['alert'] = 'alert-success';
        $data['image'] = $fileName;
        $dataCountry->addCountry($data);
        header('Location:/countries');
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /countries/new.php');
    }

}