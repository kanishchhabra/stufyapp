<ul>
    <li>Welcome <?php echo $_SESSION['firstName'] ?></li>
    <li><a href=<?php echo HTML_CONTENT_PATH . 'protected-create_project.html.php'; ?>>Create Project</a></li>
    <li><a href=<?php echo HTML_CONTENT_PATH . 'protected-view_projects.html.php'; ?>>View Projects</a></li>
    <li><a href=<?php echo HTML_CONTENT_PATH . 'protected-view_students.html.php'; ?>>View Students</a></li>
    <li><a href=<?php echo HTML_CONTROLLER_PATH . 'logout.php'; ?>>Logout</a></li>
</ul>