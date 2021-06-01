<?php
# Paths file should be included
# Database connection file must not be included
require DB_PATH . '/db.php';
try {
    $query = "SELECT student_two FROM friendship WHERE student_one = :student_one AND request_status = :request_status";
    $stmt = $db->prepare($query);
    $binding = array(
        ':student_one' => $_SESSION['email'],
        ":request_status" => 0
    );
    $stmt->execute($binding);
    $requests = $stmt->fetchall(PDO::FETCH_ASSOC);
    $_SESSION['sent_friend_requests'] = array();
    foreach ($requests as $request) {
        array_push($_SESSION['sent_friend_requests'], $request['student_two']);
    }
} catch (PDOException $e) {
    $e->getMessage();
}

#Following code adds all the friends of the user
try {
    $query = "SELECT * FROM friendship WHERE request_status = :request_status AND (student_one = :student_one OR student_two = :student_one)";
    $stmt = $db->prepare($query);
    $binding = array(
        ':student_one' => $_SESSION['email'],
        ":request_status" => 1
    );
    $stmt->execute($binding);
    $requests = $stmt->fetchall(PDO::FETCH_ASSOC);
    $_SESSION['friends'] = array();
    foreach ($requests as $request) {

        #Rejects own value to be added as friends i.e. rejects own email address
        if ($request['student_one'] == $_SESSION['email']) {
            array_push($_SESSION['friends'], $request['student_two']);
        } else {
            array_push($_SESSION['friends'], $request['student_one']);
        }
    }
} catch (PDOException $e) {
    $e->getMessage();
}

#Following code adds all the friend requests user has received
try {
    $query = "SELECT student_one FROM friendship WHERE student_two = :student_two AND request_status = :request_status";
    $stmt = $db->prepare($query);
    $binding = array(
        ':student_two' => $_SESSION['email'],
        ":request_status" => 0
    );
    $stmt->execute($binding);
    $requests = $stmt->fetchall(PDO::FETCH_ASSOC);
    $_SESSION['received_friend_requests'] = array();
    foreach ($requests as $request) {
        array_push($_SESSION['received_friend_requests'], $request['student_one']);
    }
} catch (PDOException $e) {
    $e->getMessage();
}
