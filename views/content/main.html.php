<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/authenticated_check.php";
?>
<figure class="width-100 bg-primary">
    <img class="img-fluid" src="/views/partials/images/stufy_logo.PNG" alt="">
</figure>
<section class="container-fluid">
    <h1>Welcome to Stufy</h1>
    <section class="card mb-2">
        <div class="card-body">
            <h2 class="card-heading">What is it?</h2>
            <p>
                This a minimal product design for a <strong>social media platform dedicated for students.</strong> <br>
                Once you create the account you can see students across the country in different universities pursuing different passions. You can find them, connect with them collaborate with them eventually, ease out your college life.
            </p>

        </div>
    </section>
    <section class="card mb-2">
        <div class="card-body">
            <h2 class="card-heading">Why Stufy?</h2>
            <p>
                Imagine if you could find your peers the same way you find products online? Sound silly, right? <br>
                <strong>But wait, is it actually silly?</strong> Stufy provides a list of <strong>filters</strong> for you to discover the peers based on your preferences. For instance, as an undergraduate pursuing a business course, one might needs to find mates who are doing the same course as they are, or maybe another course but are in the university as they are. <br>
                So you connect with the like minded peers more effectively using <strong>Stufy</strong>.
            </p>

        </div>
    </section>
    <section class="card mb-2">
        <div class="card-body">
            <h2 class="card-heading">Have a Go!</h2>
            <p>
                Create an account and explore the functionality.
            </p>

        </div>
    </section>
</section>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>