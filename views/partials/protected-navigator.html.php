<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href=<?php echo HTML_CONTENT_PATH . 'protected-main.html.php'; ?>><strong class="text-light">Stufy</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ">

                <a class="nav-link text-light" href=<?php echo HTML_CONTENT_PATH . 'protected-main.html.php'; ?>>Home</a>
                <a class="nav-link text-light" href=<?php echo HTML_CONTENT_PATH . 'protected-create_project.html.php'; ?>>Create Project</a>
                <a class="nav-link text-light" href=<?php echo HTML_CONTENT_PATH . 'protected-view_projects.html.php'; ?>>View Projects</a>
                <a class="nav-link text-light" href=<?php echo HTML_CONTENT_PATH . 'protected-view_students.html.php'; ?>>View Students</a>
                <a class="nav-link text-light" href=<?php echo HTML_CONTROLLER_PATH . 'logout.php'; ?>>Logout</a>

            </div>
        </div>
    </div>
</nav>