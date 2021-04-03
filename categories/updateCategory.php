<?php
session_start();

use App\Models\Validator;

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    unset($_SESSION['errors']);

    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['description'] = Validator::preProcessing($_POST['description']);
    $data['id'] = $_POST['id'];

    $category = $dataCategory->getOneCategory($data['id']);

    [$errorLoad, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image');

    if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
        $fileName = $category->image;
        $errorLoad = '';
    } else {
        deleteImg('../img/' . $category->image);
    }

    if (empty($errorLoad)) {
        $data['image'] = $fileName;

        $dataCategory->updateCategory($data);

        header('Location: /categories/index.php');
    } else {
        $_SESSION['errors']['update'] = $errorLoad;

        header('Location: /categories/edit.php?id=' . $data['id']);
    }
}