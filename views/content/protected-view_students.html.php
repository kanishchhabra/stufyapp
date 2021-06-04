<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/unauthenticated_check.php";
error_reporting(E_ALL & ~E_NOTICE);
?>
<section class="card mb-2">
    <div class="card-body">
        <h2 class="card-heading">View Students</h2>
        <p>
            Our main feature is to help you find like-minded peers and you can experience the idea while muddling with <strong>View Students</strong> page. <br>
            You will find <strong>Filters</strong> allowing you narrow down the list of students based on your preferences.
            Hoping that you'll like it.
        </p>

    </div>
</section>


<div class="container-fluid">
    <div class="row row-cols-auto" id="studentsList">
        <?php
        require CONTROLLER_PATH . "/view_students.php";
        ?>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>