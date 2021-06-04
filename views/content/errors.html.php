<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/authenticated_check.php";
?>

<section class="card mb-2">
    <div class="card-body bg-warning">
        <h2 class="card-heading">Error</h2>
        <p>
            <strong>
                <?php
                print_r($_SESSION['errors']) . "<br>";
                session_unset('errors');
                ?>
            </strong>
        </p>

    </div>
</section>

<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>