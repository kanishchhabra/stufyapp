<?php
require DB_PATH . '/db.php';

try {
    $query = "SELECT * FROM project";

    $stmt = $db->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchall(PDO::FETCH_ASSOC);
    foreach ($results as $result) {
        include PARTIALS_PATH . "/protected-project_block.html.php";
    }
} catch (PDOException $errors) {
    echo $_SESSION['errors'] = $errors->getMessage();
    header('Location: /views/content/errors.html.php');;
}
