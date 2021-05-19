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
            echo "Logged in as " . $_SESSION['firstName'] . $_SESSION['lastName'];
            echo "<br>Email " . $_SESSION['email'];

            /* include the files with the list of all student requests for that specific logged in user */
            include CONTROLLER_PATH . "/view_students.php";

            include CONTENT_PATH . '/view_students.html.php';
            header('Location: /controller/main.php');
        } else {
            echo "Wrong Password";
        }
    } else {
        echo "FALSE";
    }
}
