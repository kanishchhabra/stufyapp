<?php

include DB_PATH . '/db.php';


echo "<h1>Incoming Requests</h1>";
$update = "UPDATE friendship
SET request_status=?
WHERE sending_student=?";
$query = "SELECT sending_student FROM friendship WHERE receiving_student = ?";
            
			
			$stmt = $db->prepare($query);
			
			$binding = array($_SESSION['email']);
			
			$stmt->execute($binding);
			
			$results = $stmt->fetchall(PDO::FETCH_ASSOC);
			
			foreach($results as $result){
				echo "<p>{$result['sending_student']}</p>";
			}

?>