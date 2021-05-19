<section>
    <ul>
        <li> <?php echo $result['firstName'] . " " . $result['lastName']; ?></li>
        <ul>
            <li>Date of Birth: <?php echo $result['DOB']; ?></li>
            <li>Discipline: <?php echo $result['discipline']; ?></li>
            <li>University: <?php echo $result['university']; ?> </li>
            <li>Qualification: <?php echo $result['qualification']; ?> </li>
            <li>E-Mail: <?php echo $result['email']; ?> </li>
            <li>Study Year: <?php echo $result['study_year']; ?> </li>
        </ul>
    </ul>
    <form action=<?php echo HTML_CONTROLLER_PATH . 'requests_friend.php' ?> method='post'>
        <input type="hidden" value=<?php echo $result['email']; ?> name="email">
        <?php
        if (in_array($result['email'], $_SESSION['sent_friend_requests'])) {
            $button_name = "cancel_request";
            $button_value = "Cancel Request";
            require PARTIALS_PATH . "/button_input_request.html.php";
        } elseif (in_array($result['email'], $_SESSION['received_friend_requests'])) {
            $button_name = "accept_request";
            $button_value = "Accept Request";
            require PARTIALS_PATH . "/button_input_request.html.php";
            $button_name = "reject_request";
            $button_value = "Reject Request";
            require PARTIALS_PATH . "/button_input_request.html.php";
        } elseif (in_array($result['email'], $_SESSION['friends'])) {
            $button_name = "remove_friend";
            $button_value = "Remove Friend";
            require PARTIALS_PATH . "/button_input_request.html.php";
        } else {
            $button_name = "send_request";
            $button_value = "Send Request";
            require PARTIALS_PATH . "/button_input_request.html.php";
        }
        ?>
    </form>
</section> <br>