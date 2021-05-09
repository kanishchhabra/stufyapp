<?php
require $_SERVER['DOCUMENT_ROOT'] . "/controller/paths.php";
DEFINE('SALT', '61A394DEF8C5B072');
require DB_PATH . '/db.php';

if (isset($_POST['create_user'])) {
    $salt = str_shuffle(SALT);
    $password = md5($salt . $_POST['password']);

    try {
        $query = "INSERT INTO student
        (firstName, lastname, DOB, email, university, study_year, discipline, qualification, pass, salt)
        VALUES
        (:first_name, 
        :last_name, 
        :date_of_birth, 
        :email, 
        (SELECT university_name FROM university WHERE university_name = :university), 
        :study_year,
        (SELECT discipline_name FROM discipline WHERE discipline_name = :discipline), 
        (SELECT qualification_name FROM qualification WHERE qualification_name = :qualification), 
        :pass, 
        :salt)";

        $stmt = $db->prepare($query);
        $binding = array(
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'date_of_birth' => $_POST['date_of_birth'],
            'email' => $_POST['email'],
            'university' => strval($_POST['university']),
            'study_year' => $_POST['study_year'],
            'discipline' => strval($_POST['discipline']),
            'qualification' => strval($_POST['qualification']),
            'pass' => $password,
            'salt' => $salt
        );
        $stmt->execute($binding);
        header('Location:/');
    } catch (PDOException $errors) {
        echo $errors->getMessage();
    }
}
