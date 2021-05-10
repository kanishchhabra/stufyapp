<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/components/header.html.php";
require CONTROLLER_PATH . "/unauthenticated_check.php";
?>
<h1>Stufy - Discovering Peers</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsam beatae, magnam odio deserunt ab ex asperiores <br>
    totam inventore tempora rerum quia nam cupiditate libero eveniet adipisci cum voluptas provident?</p>
<ul>
    <li>Welcome <?php echo $_SESSION['firstName'] ?></li>
    <li><a href=<?php echo HTML_CONTROLLER_PATH . 'logout.php'; ?>>Logout</a></li>
</ul>

<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/components/footer.html.php";
?>