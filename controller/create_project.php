<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/controller/paths.php";
require DB_PATH . '/db.php';

if (isset($_POST['create_project'])) {
    try {
        $query = "INSERT INTO project
        (project_name, project_description, discipline, coordinator, project_status)
        VALUES
        (:project_name, 
        :project_description, 
        (SELECT discipline_name FROM discipline WHERE discipline_name = :discipline), 
        (SELECT email FROM student WHERE email = :coordinator),
        :project_status)";

        $stmt = $db->prepare($query);
        $binding = array(
            'project_name' => $_POST['project_name'],
            'project_description' => $_POST['project_description'],
            'discipline' => $_POST['discipline'],
            'coordinator' => $_SESSION['email'],
            'project_status' =>  $_POST['project_status']
        );
        $stmt->execute($binding);
        header('Location:/views/content/protected-view_projects.html.php');
    } catch (PDOException $errors) {
        echo $errors->getMessage();
    }
}
