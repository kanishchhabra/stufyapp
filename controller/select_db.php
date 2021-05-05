<?php
# create variables $column_name and $table_name on the view
DEFINE('DB_PATH', $_SERVER['DOCUMENT_ROOT'] . "/db");
require DB_PATH . '/db.php';
$query = "SELECT " . $column_name . " from " . $table_name;
$stmt = $db->prepare($query);
$stmt->execute();

$results = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($results as $result) {
    echo "<option value ='{$result[$column_name]}'>{$result[$column_name]}</option>";
}
