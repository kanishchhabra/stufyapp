<?php
session_start();
if (!(empty($_SESSION['authenticated']))) {
    if ($_SESSION['authenticated']) {
        header('Location: /views/content/protected-main.html.php');
    } else {
        header('Location: /views/content/main.html.php');
    }
} else {
    header('Location: /views/content/main.html.php');
}
