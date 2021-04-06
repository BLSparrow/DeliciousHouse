<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$error = "";


if (isset($_POST["delete"])) {

    $id = $_POST['id'];
    $prod = $dataProd->getOneProduct($id);
    $error = deleteImg('../IMG/' . $prod->image);

    if (empty($error)) {

        $_SESSION["msg"] = "Файл успешно удалён";
        $_SESSION['alert'] = 'alert-success';
        $dataProd->deleteProduct($id);
        header("Location: /products");

    } else {

        $_SESSION["msg"] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header("Location: /products");
    }

}