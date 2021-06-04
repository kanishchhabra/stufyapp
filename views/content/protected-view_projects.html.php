<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/unauthenticated_check.php";
?>
<section class="card mb-2">
    <div class="card-body">
        <h2 class="card-heading">View Projects</h2>
        <p>
            <strong>Collaboration</strong> is another need our platform aims to fulfill. More than often, so many interesting things are happening around you had you been aware about them. On Study, you can find the projects based on your preferences in the same way it aloows you finding peers. <br>
            Due to similarities in the idea behind it, project page is not fully functional, however, to demonstrate the basic function: <br>
        <ul>
            <li>You can create the project using 'Create Project' option.</li>
            <li> On the 'View Projects' page, you can find projects, with all the details.</li>
        </ul>
        <br>
        On the fully functional interface: <br>
        <ul>
            <li> You can <strong>Filter</strong> the projects based on your preferences.</li>
            <li>It will allow you to <strong>request to join</strong> the project, <strong>contact the project owner</strong> and much more.</li>
        </ul>

        </p>

    </div>
</section>
<section class="container-fluid">

    <div class="container-fluid">
        <div class="row row-cols-auto">
            <?php
            require CONTROLLER_PATH . "/view_projects.php";
            ?>
        </div>
    </div>
</section>

<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>