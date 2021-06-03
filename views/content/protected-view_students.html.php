<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/unauthenticated_check.php";
error_reporting(E_ALL & ~E_NOTICE);
?>
<section class="container">
    <h1>Students</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quam exercitationem suscipit modi reiciendis, <br>
        ut quos iste accusantium perferendis doloremque optio ratione soluta tempore aspernatur ipsa animi rem deleniti molestias?</p>

    <button class="btn btn-primary mb-2" name='filter' id="filterButton">Filter</button>
    <?php include PARTIALS_PATH . "/form-filters.html.php" ?>
</section>


<div class="container">
    <div class="row row-cols-auto" id="studentsList">
        <?php
        require CONTROLLER_PATH . "/view_students.php";
        ?>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>