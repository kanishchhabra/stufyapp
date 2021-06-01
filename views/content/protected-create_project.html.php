<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/unauthenticated_check.php";
?>
<section class="container-fluid">
    <h1>Create a Project</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quam exercitationem suscipit modi reiciendis, <br>
        ut quos iste accusantium perferendis doloremque optio ratione soluta tempore aspernatur ipsa animi rem deleniti molestias?</p>

    <?php
    include PARTIALS_PATH . "/form-project_creation.html.php";
    ?>
</section>

<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>