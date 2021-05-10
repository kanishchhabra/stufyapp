<ul>
    <li>Welcome <?php echo $_SESSION['firstName'] ?></li>
    <li><a href=<?php echo HTML_LAYOUTS_PATH . 'protected-create_project.html.php'; ?>>Create Project</a></li>
    <li><a href=<?php echo HTML_LAYOUTS_PATH . 'protected-view_project.html.php'; ?>>View Projects</a></li>
    <li><a href=<?php echo HTML_CONTROLLER_PATH . 'logout.php'; ?>>Logout</a></li>
</ul>