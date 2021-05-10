<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/components/header.html.php";

if (!(empty($_SESSION['authenticated']))) {
    if (!($_SESSION['authenticated'])) {
        header('Location: /views/layouts/main.html.php');
    }
}
?>

<h1>Create a Project</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quam exercitationem suscipit modi reiciendis, <br>
    ut quos iste accusantium perferendis doloremque optio ratione soluta tempore aspernatur ipsa animi rem deleniti molestias?</p>

<?php
include COMPONENTS_PATH . "/form-project_creation.html.php";
?>

<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/components/footer.html.php";
?>