<?php
if (!(empty($_SESSION['authenticated']))) {
    if ($_SESSION['authenticated']) {
        header("Location: /views/layouts/protected-main.html.php");
    }
}
