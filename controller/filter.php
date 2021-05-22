<?php
require $_SERVER['DOCUMENT_ROOT'] . "/controller/paths.php";
require DB_PATH . '/db.php';

$uni = $_GET['university'];
$sy = $_GET['study_year'];
$disc = $_GET['discipline'];
$qual = $_GET['qualification'];
echo "<p>$uni, $sy, $disc, $qual</p>";

try {
    $query = "SELECT * FROM student WHERE university = ? AND study_year = ? AND discipline = ? AND qualification = ?";
    $stmt = $db->prepare($query);
    $binding = array($uni, $sy, $disc, $qual);

    $stmt->execute($binding);

    $results = $stmt->fetchall(PDO::FETCH_ASSOC);

    foreach($results As $result){
        echo "<p>{$result['firstName']} {$result['lastName']}</p>
        Contact: {$result['email']}
        <br>Studies at: {$result['university']} for {$result['study_year']} years
        <br>Discipline: {$result['discipline']}
        <br>Qualifications: {$result['qualification']}";
    }
     
    
    
    
} catch (PDOException $e) {
    echo $e;
}

?>
