<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/unauthenticated_check.php";
?>
<section class="container-fluid">
    <figure class="width-100 bg-primary">
        <img class="img-fluid" src="/views/partials/images/stufy_logo.PNG" alt="">
    </figure>
    <h1>Welcome <?php echo $_SESSION['firstName'] ?></h1>
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
    <section class="card mb-2 bg-warning">
        <div class="card-body">
            <h2 class="card-heading">Your Wisdom</h2>
            <p>
                Please write to us, we are still in the development stage and will love to take your wisdom onboard. <br>
                <a href="mailto:kanish.chhabra@gmail.com?subject=Stufy Feedback">Engage</a> with us for feedback, please.
            </p>

        </div>
    </section>
</section>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>