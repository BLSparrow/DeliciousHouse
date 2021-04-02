<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$error = "";


if (isset($_POST["delete"])) {

    $id = $_POST['id'];
    $country = $dataCountry->getOneCountry($id);
    $error = deleteImg('../IMG/' . $country->image);

    if (empty($error)) {

        $_SESSION["msg"] = "Файл успешно удалён";
        $_SESSION['alert'] = 'alert-success';
        $dataCountry->deleteCountry($id);
        header("Location: /countries");

    } else {

        $_SESSION["msg"] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header("Location: /countries/countries.view.php");
    }

}