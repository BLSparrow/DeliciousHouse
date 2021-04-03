<?php
session_start();

use App\Models\Validator;

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    unset($_SESSION['errors']);

    $data['country'] = Validator::preProcessing($_POST['country']);
    $data['id'] = $_POST['id'];

    $country = $dataCountry->getOneCountry($data['id']);

    [$errorLoad, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image');

    if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
        $fileName = $country->image;
        $errorLoad = '';
    } else {
        deleteImg('../img/' . $country->image);
    }

    if (empty($errorLoad)) {
        $data['image'] = $fileName;

        $dataCountry->updateCountry($data);

        header('Location: /countries/index.php');
    } else {
        $_SESSION['errors']['update'] = $errorLoad;

        header('Location: /countries/edit.php?id=' . $data['id']);
    }
}