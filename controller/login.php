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
            $_SESSION['errors'] = 'Wrong Credentials';
            header('Location: /views/content/errors.html.php');
        }
    } else {
        $_SESSION['errors'] = "Something went Wrong";
        header('Location: /views/content/errors.html.php');
    }
}
