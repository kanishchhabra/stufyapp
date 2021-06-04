<?php
session_start();
if (isset($_POST['action'])) {
	require "paths.php";
	require DB_PATH . '/db.php';
	try {
		$query = "SELECT * FROM student WHERE email != ''";
		if (!(empty($_POST['discipline']))) {
			$discipline = implode("','", $_POST['discipline']);
			$query = $query . " AND discipline IN ('{$discipline}')";
		}
		if (!(empty($_POST['university']))) {
			$university = implode("','", $_POST['university']);
			$query = $query . " AND university IN ('{$university}')";
		}
		if (!(empty($_POST['study_year']))) {
			$study_year = implode("','", $_POST['study_year']);
			$query = $query = $query . " AND study_year IN ('{$study_year}')";
		}
		if (!(empty($_POST['qualification']))) {
			$qualification = implode("','", $_POST['qualification']);
			$query = $query = $query . " AND qualification IN ('{$qualification}')";
		}
		$stmt = $db->prepare($query);

		$stmt->execute();
		$results = array();
		$results = $stmt->fetchall(PDO::FETCH_ASSOC);
		foreach ($results as $result) {
			#Excludes own profile to be listed in the friend list
			if ($result['email'] == $_SESSION['email']) {
				continue;
			}
			include PARTIALS_PATH . "/protected-student_block.html.php";
		}
	} catch (PDOException $errors) {
		echo $_SESSION['errors'] = $errors->getMessage();
		header('Location: /views/content/errors.html.php');;
	}
} else {
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
		echo $_SESSION['errors'] = $errors->getMessage();
		header('Location: /views/content/errors.html.php');;
	}
}
