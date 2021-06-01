<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/unauthenticated_check.php";
?>
<h1>Filter students</h1>


<?php
include PARTIALS_PATH . "/form-filters.html.php";
?>

<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>