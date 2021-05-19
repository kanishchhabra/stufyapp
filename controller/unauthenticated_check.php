<?php
if (empty($_SESSION['authenticated'])) {
    if (!($_SESSION['authenticated'])) {
        header("Location: /views/content/main.html.php");
    }
}
