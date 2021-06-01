<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/unauthenticated_check.php";
error_reporting(E_ALL & ~E_NOTICE);
?>
<section class="container">
    <h1>Students</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quam exercitationem suscipit modi reiciendis, <br>
        ut quos iste accusantium perferendis doloremque optio ratione soluta tempore aspernatur ipsa animi rem deleniti molestias?</p>

    <!--button in partial,
included here,
action = filters page in content
-->
    <?php
    include PARTIALS_PATH . "/filter_button.html.php";
    ?>
</section>


<div class="container">
    <div class="row row-cols-auto">
        <?php
        if (!($_SESSION['filtered_students'])) {
            require CONTROLLER_PATH . "/view_students.php";
        } elseif ($_SESSION['filtered_students'] == 'empty') {
            unset($_SESSION['filtered_students']);
        } else {
            $results = $_SESSION['filtered_students'];
            foreach ($results as $result) {
                if (!($result['email'] == $_SESSION['email'])) {
                    require PARTIALS_PATH . "//protected-student_block.html.php";
                }
            }
            unset($_SESSION['filtered_students']);
        }
        ?>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>