<?php
function checkEmail($email, $db)
{
    try {
        $query = "SELECT email FROM student WHERE email = :email";
        $stmt = $db->prepare($query);
        $binding = array(
            ":email" => $_POST['email']
        );
        $stmt->execute($binding);
        $results = $stmt->fetchall(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            $_SESSION['email'] = $result['email'];
        }
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
