<?php
require $_SERVER['DOCUMENT_ROOT'] . "/controller/paths.php";
require DB_PATH . '/db.php';
session_start();

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    require FUNCTIONS_PATH . "/check_email.php";
    require FUNCTIONS_PATH . "/check_password.php";

    if (checkEmail($email, $db)) {
        if (checkPassword($email, $password, $db)) {
            header('Location: /controller/main.php');
        } else {
            echo "Wrong Password";
        }
    } else {
        echo "FALSE";
    }
}
