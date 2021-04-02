<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$error = "";


if (isset($_POST["delete"])) {

    $id = $_POST['id'];
    $category = $dataCategory->getOneCategory($id);
    $error = deleteImg('../IMG/' . $category->image);

    if (empty($error)) {

        $_SESSION["msg"] = "Файл успешно удалён";
        $_SESSION['alert'] = 'alert-success';
        $dataCategory->deleteCategory($id);
        header("Location: /categories");

    } else {

        $_SESSION["msg"] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header("Location: /categories/categories.view.php");
    }

}