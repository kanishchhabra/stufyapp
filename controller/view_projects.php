<?php
require DB_PATH . '/db.php';

try {
    $query = "SELECT * FROM project";

    $stmt = $db->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchall(PDO::FETCH_ASSOC);
    foreach ($results as $result) {
        include COMPONENTS_PATH . "/protected-project_block.html.php";
    }
} catch (PDOException $errors) {
    echo $errors->getMessage();
}
