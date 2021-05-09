<?php
function checkPassword($email, $pass, $db)
{
    try {
        $query = "SELECT * FROM student WHERE email = :email";
        $stmt = $db->prepare($query);
        $binding = array(
            ":email" => $email
        );
        $stmt->execute($binding);
        $results = $stmt->fetchall(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            if ($result['email'] == $email) {
                $pass = md5($result['salt'] . $pass);
                if ($pass == $result['pass']) {
                    $_SESSION['authenticated'] = true;
                    $_SESSION['firstName'] = $result['firstName'];
                    $_SESSION['lastName'] = $result['lastName'];
                    $_SESSION['dateofbirth'] = $result['DOB'];
                    $_SESSION['university'] = $result['university'];
                    $_SESSION['study_year'] = $result['study_year'];
                    $_SESSION['discipline'] = $result['discipline'];
                    $_SESSION['qualification'] = $result['qualification'];
                    return true;
                } else {
                    return false;
                }
            };
        }
    } catch (PDOException $e) {
        return false;
    }
}
