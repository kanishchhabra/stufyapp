<?php
require $_SERVER['DOCUMENT_ROOT'] . "/controller/paths.php";
require DB_PATH . '/db.php';


if(isset($_POST['add_student'])){
    $req_status = 0;
    $act_student = 1;

    echo "Sent to: {$_POST['rec_student']}<br>";
    echo "From: {$_POST['send_student']}";


    try {
        /* DELETE query for rejecting friends */
        $delete = "DELETE from friendship WHERE sending_student = ?";
        

        $query = "INSERT INTO friendship(sending_student, receiving_student, request_status, action_student)
        VALUES(
            :sending_student,
            :receiving_student,
            :request_status,
            :action_student
        )";

        $stmt = $db->prepare($query);

        $binding = array(
            'sending_student' => $_POST['send_student'],
            'receiving_student' => $_POST['rec_student'],
            'request_status' => $req_status,
            'action_student' => $act_student

        );

        $stmt->execute($binding);

        $results = $stmt->fetchall(PDO::FETCH_ASSOC);

        foreach($results as $result){
				echo "<p>{$result['email']}</p>";
			}


        echo "It works";
    } catch (PDOException $e){
        echo $e;
    }

    
}

?>