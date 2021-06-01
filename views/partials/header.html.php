<?php
require $_SERVER['DOCUMENT_ROOT'] . "/controller/paths.php";
session_start();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Stufy</title>
</head>

<body>
    <?php
    if (!(empty($_SESSION['authenticated']))) {
        if ($_SESSION['authenticated']) {
            require CONTROLLER_PATH . "/update_session_arrays.php";
            require PARTIALS_PATH . "/protected-navigator.html.php";
        }
    }
    ?>