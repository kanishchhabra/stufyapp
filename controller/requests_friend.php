<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/controller/paths.php";
require DB_PATH . '/db.php';
if (isset($_POST['action']) == 'data') {

    #Following code handles sending friend requests
    if ($_POST['name'] == 'send_request') {
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

            require CONTROLLER_PATH . "/update_session_arrays.php";

            if (in_array($_POST['email'], $_SESSION['sent_friend_requests'])) {
                $button_name = "cancel_request";
                $button_value = "Cancel Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['received_friend_requests'])) {
                $button_name = "accept_request";
                $button_value = "Accept Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
                $button_name = "reject_request";
                $button_value = "Reject Request";
                $button_class = "btn-secondary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['friends'])) {
                $button_name = "remove_friend";
                $button_value = "Remove Friend";
                $button_class = "btn-danger";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } else {
                $button_name = "send_request";
                $button_value = "Send Request";
                $button_class = "btn-primary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            }
        } catch (PDOException $errors) {
            echo $_SESSION['errors'] = $errors->getMessage();
            header('Location: /views/content/errors.html.php');;
        }
    }

    #Following code handles accepting friend requests
    elseif ($_POST['name'] == 'accept_request') {
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

            require CONTROLLER_PATH . "/update_session_arrays.php";

            if (in_array($_POST['email'], $_SESSION['sent_friend_requests'])) {
                $button_name = "cancel_request";
                $button_value = "Cancel Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['received_friend_requests'])) {
                $button_name = "accept_request";
                $button_value = "Accept Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
                $button_name = "reject_request";
                $button_value = "Reject Request";
                $button_class = "btn-secondary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['friends'])) {
                $button_name = "remove_friend";
                $button_value = "Remove Friend";
                $button_class = "btn-danger";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } else {
                $button_name = "send_request";
                $button_value = "Send Request";
                $button_class = "btn-primary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            }
        } catch (PDOException $errors) {
            echo $_SESSION['errors'] = $errors->getMessage();
            header('Location: /views/content/errors.html.php');;
        }
    }

    #Following code handles rejecting friend requests
    elseif ($_POST['name'] == 'reject_request') {
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

            require CONTROLLER_PATH . "/update_session_arrays.php";

            if (in_array($_POST['email'], $_SESSION['sent_friend_requests'])) {
                $button_name = "cancel_request";
                $button_value = "Cancel Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['received_friend_requests'])) {
                $button_name = "accept_request";
                $button_value = "Accept Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
                $button_name = "reject_request";
                $button_value = "Reject Request";
                $button_class = "btn-secondary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['friends'])) {
                $button_name = "remove_friend";
                $button_value = "Remove Friend";
                $button_class = "btn-danger";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } else {
                $button_name = "send_request";
                $button_value = "Send Request";
                $button_class = "btn-primary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            }
        } catch (PDOException $errors) {
            echo $_SESSION['errors'] = $errors->getMessage();
            header('Location: /views/content/errors.html.php');;
        }
    }

    #Following code handles blocking friend requests
    elseif ($_POST['name'] == 'block_request') {
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

            require CONTROLLER_PATH . "/update_session_arrays.php";

            if (in_array($_POST['email'], $_SESSION['sent_friend_requests'])) {
                $button_name = "cancel_request";
                $button_value = "Cancel Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['received_friend_requests'])) {
                $button_name = "accept_request";
                $button_value = "Accept Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
                $button_name = "reject_request";
                $button_value = "Reject Request";
                $button_class = "btn-secondary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['friends'])) {
                $button_name = "remove_friend";
                $button_value = "Remove Friend";
                $button_class = "btn-danger";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } else {
                $button_name = "send_request";
                $button_value = "Send Request";
                $button_class = "btn-primary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            }
        } catch (PDOException $errors) {
            echo $_SESSION['errors'] = $errors->getMessage();
            header('Location: /views/content/errors.html.php');;
        }
    }

    #Following code handles cancelling friend requests

    elseif ($_POST['name'] == 'cancel_request') {
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

            require CONTROLLER_PATH . "/update_session_arrays.php";

            if (in_array($_POST['email'], $_SESSION['sent_friend_requests'])) {
                $button_name = "cancel_request";
                $button_value = "Cancel Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['received_friend_requests'])) {
                $button_name = "accept_request";
                $button_value = "Accept Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
                $button_name = "reject_request";
                $button_value = "Reject Request";
                $button_class = "btn-secondary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['friends'])) {
                $button_name = "remove_friend";
                $button_value = "Remove Friend";
                $button_class = "btn-danger";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } else {
                $button_name = "send_request";
                $button_value = "Send Request";
                $button_class = "btn-primary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            }
        } catch (PDOException $errors) {
            echo $_SESSION['errors'] = $errors->getMessage();
            header('Location: /views/content/errors.html.php');;
        }
    }

    #Following code handles removing friend
    elseif ($_POST['name'] == 'remove_friend') {
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

            require CONTROLLER_PATH . "/update_session_arrays.php";

            if (in_array($_POST['email'], $_SESSION['sent_friend_requests'])) {
                $button_name = "cancel_request";
                $button_value = "Cancel Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['received_friend_requests'])) {
                $button_name = "accept_request";
                $button_value = "Accept Request";
                $button_class = "btn-warning";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
                $button_name = "reject_request";
                $button_value = "Reject Request";
                $button_class = "btn-secondary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } elseif (in_array($_POST['email'], $_SESSION['friends'])) {
                $button_name = "remove_friend";
                $button_value = "Remove Friend";
                $button_class = "btn-danger";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            } else {
                $button_name = "send_request";
                $button_value = "Send Request";
                $button_class = "btn-primary";
                $button_email = $_POST['email'];
                require PARTIALS_PATH . "/button_input_request.html.php";
            }
        } catch (PDOException $errors) {
            echo $_SESSION['errors'] = $errors->getMessage();
            header('Location: /views/content/errors.html.php');;
        }
    }
}
