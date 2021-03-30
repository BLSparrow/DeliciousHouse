<?php
session_start();

use App\Models\Validator;

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    unset($_SESSION['errors']);

    $data['title'] = Validator::preProcessing($_POST['title']);
    $data['text'] = Validator::preProcessing($_POST['text']);
    $data['id'] = $_POST['id'];

    $post = $dataPost->getOnePost($data['id']);

    [$errorLoad, $fileName] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image');

    if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
        $fileName = $post->image;
        $errorLoad = '';
    } else {
        deletePost('../img/' . $post->image);
    }

    if (empty($errorLoad)) {
        $data['image'] = $fileName;

        $dataPost->updatePost($data);

        header('Location: /posts/show.php?id=' . $data['id']);
    } else {
        $_SESSION['errors']['update'] = $errorLoad;

        header('Location: /posts/edit.php?id=' . $data['id']);
    }
}