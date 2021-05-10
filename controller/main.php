<?php
session_start();
if (!(empty($_SESSION['authenticated']))) {
    echo $_SESSION['firstname'];
    if ($_SESSION['authenticated']) {
        header('Location: /views/layouts/main_authenticated.html.php');
    } else {
        header('Location: /views/layouts/main_unauthenticated.html.php');
    }
} else {
    header('Location: /views/layouts/main_unauthenticated.html.php');
}
