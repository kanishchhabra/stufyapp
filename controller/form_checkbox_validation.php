<?php
# create variables $column_name and $table_name on the view
require DB_PATH . '/db.php';
$query = "SELECT DISTINCT " . $column_name . " FROM " . $table_name . " ORDER BY " . $column_name;
$stmt = $db->prepare($query);
$stmt->execute();

$results = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($results as $result) {
    echo "<div>";
    echo "<input class='students_check' id = '{$column_name}' type='checkbox' value ='{$result[$column_name]}'></input>";
    echo "<label class='form-label m-2'  for='discipline'>{$result[$column_name]}</label>";
    echo "</div>";
}
