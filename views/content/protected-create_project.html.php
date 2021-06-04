<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/unauthenticated_check.php";
?>
<section class="container-fluid">
    <h1>Create a Project</h1>

    <?php
    include PARTIALS_PATH . "/form-project_creation.html.php";
    ?>
</section>

<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>