<?php
session_start();

use App\Models\Validator;

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    unset($_SESSION['errors']);

    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['description'] = Validator::preProcessing($_POST['description']);
    $data['numberOfServings'] = $_POST['numberOfServings'];
    $data['weight'] = $_POST['weight'];
    $data['price'] = $_POST['price'];
    $data['category_id'] = $_POST['category_id'];
    $data['country_id'] = $_POST['country_id'];
    $data['id'] = $_POST['id'];

    $product = $dataProd->getOneProduct($data['id']);

    [$errorLoad, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image');

    if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
        $fileName = $product->image;
        $errorLoad = '';
    } else {
        deleteImg('../img/' . $product->image);
    }

    if (empty($errorLoad)) {
        $data['image'] = $fileName;

        $dataProd->updateProduct($data);

        header('Location: /products/index.php');
    } else {
        $_SESSION['errors']['update'] = $errorLoad;

        header('Location: /products/edit.php?id=' . $data['id']);
    }
}