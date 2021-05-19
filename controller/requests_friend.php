<?php
#Please assign $recipient in the HTML file to the email address of the person receiving the request
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/controller/paths.php";
require DB_PATH . '/db.php';

#Following code handles sending friend requests
if (isset($_POST['send_request'])) {
    $recipient = $_POST['email'];
    $sender = $_SESSION['email'];

    try {
        $query = "INSERT INTO friendship (student_one, student_two, request_status, action_student)
                VALUES(
                    (SELECT email FROM student WHERE email = :student_one),
                    (SELECT email FROM student WHERE email = :student_two),
                    :request_status,
                    :action_student
                )";
        $stmt = $db->prepare($query);
        $binding = array(
            'student_one' => $sender,
            'student_two' => $recipient,
            'request_status' => 0,
            'action_student' => $sender
        );
        $stmt->execute($binding);
        header("Location: /views/content/protected-view_students.html.php");
    } catch (PDOException $errors) {
        echo $errors->getMessage();
    }
}

#Following code handles accepting friend requests
elseif (isset($_POST['accept_request'])) {
    $recipient = $_SESSION['email'];
    $sender = $_POST['email'];

    try {
        $query = "UPDATE friendship SET request_status = :request_status, action_student = :student_two WHERE (student_one = :student_two OR student_one = :student_one) AND (student_two = :student_two OR student_two = :student_one)";
        $stmt = $db->prepare($query);
        $binding = array(
            ':student_two' => $recipient,
            ':student_one' => $sender,
            ':request_status' => 1,
        );
        $stmt->execute($binding);
    } catch (PDOException $errors) {
        echo $errors->getMessage();
    }
    header('Location:/views/content/protected-view_students.html.php');
}

#Following code handles rejecting friend requests
elseif (isset($_POST['reject_request'])) {
    $recipient = $_SESSION['email'];
    $sender = $_POST['email'];

    try {
        $query = "DELETE FROM friendship WHERE (student_one = :student_two OR student_one = :student_one) AND (student_two = :student_two OR student_two = :student_one)";
        $stmt = $db->prepare($query);
        $binding = array(
            ':student_two' => $recipient,
            ':student_one' => $sender
        );
        $stmt->execute($binding);
        header("Location: /views/content/protected-view_students.html.php");
    } catch (PDOException $errors) {
        echo $errors->getMessage();
    }
}


#Following code handles blocking friend requests
elseif (isset($_POST['block_request'])) {
    $recipient = $_SESSION['email'];
    $sender = $_POST['email'];

    try {
        $query = "UPDATE friendship SET request_status = :request_status, action_student = :student_two WHERE (student_one = :student_two OR student_one = :student_one) AND (student_two = :student_two OR student_two = :student_one)";
        $stmt = $db->prepare($query);
        $binding = array(
            ':student_two' => $recipient,
            ':student_one' => $sender,
            ':request_status' => 3,
        );
        $stmt->execute($binding);
        header("Location: /views/content/protected-view_students.html.php");
    } catch (PDOException $errors) {
        echo $errors->getMessage();
    }
}

#Following code handles cancelling friend requests
elseif (isset($_POST['cancel_request'])) {
    $recipient = $_POST['email'];
    $sender = $_SESSION['email'];

    try {
        $query = "DELETE FROM friendship WHERE (student_one = :student_two OR student_one = :student_one) AND (student_two = :student_two OR student_two = :student_one)";
        $stmt = $db->prepare($query);
        $binding = array(
            ':student_two' => $recipient,
            ':student_one' => $sender
        );
        $stmt->execute($binding);
        header("Location: /views/content/protected-view_students.html.php");
    } catch (PDOException $errors) {
        echo $errors->getMessage();
    }
}

#Following code handles removing friend
elseif (isset($_POST['remove_friend'])) {
    $recipient = $_POST['email'];
    $sender = $_SESSION['email'];

    try {
        $query = "DELETE FROM friendship WHERE (student_one = :student_two OR student_one = :student_one) AND (student_two = :student_two OR student_two = :student_one)";
        $stmt = $db->prepare($query);
        $binding = array(
            ':student_two' => $recipient,
            ':student_one' => $sender
        );
        $stmt->execute($binding);
        header("Location: /views/content/protected-view_students.html.php");
    } catch (PDOException $errors) {
        echo $errors->getMessage();
    }
}
