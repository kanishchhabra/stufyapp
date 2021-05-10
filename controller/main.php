<?php
session_start();
if (!(empty($_SESSION['authenticated']))) {
    if ($_SESSION['authenticated']) {
        header('Location: /views/layouts/protected-main.html.php');
    } else {
        header('Location: /views/layouts/main.html.php');
    }
} else {
    header('Location: /views/layouts/main.html.php');
}
