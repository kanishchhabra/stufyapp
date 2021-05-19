<?php
require DB_PATH . '/db.php';
try {
	$query = "SELECT * FROM student";

	$stmt = $db->prepare($query);
	$stmt->execute();
	$results = $stmt->fetchall(PDO::FETCH_ASSOC);
	foreach ($results as $result) {
		#Excludes own profile to be listed in the friend list
		if ($result['email'] == $_SESSION['email']) {
			continue;
		}
		include PARTIALS_PATH . "/protected-student_block.html.php";
	}
} catch (PDOException $errors) {
	echo $errors->getMessage();
}
