<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/header.html.php";
require CONTROLLER_PATH . "/authenticated_check.php";
?>
<h1>Stufy - Discovering Peers</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsam beatae, magnam odio deserunt ab ex asperiores <br>
    totam inventore tempora rerum quia nam cupiditate libero eveniet adipisci cum voluptas provident?</p>
<ul>
    <li><a href=<?php echo HTML_CONTENT_PATH . 'registration.html.php'; ?>>Registration</a></li>
    <li><a href=<?php echo HTML_CONTENT_PATH . 'login.html.php'; ?>>Login</a></li>
</ul>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/partials/footer.html.php";
?>