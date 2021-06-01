<div class="col">
    <section class="card container-fluid">
        <div class="card-body">
            <h4 class="card-title">
                <?php echo $result['firstName'] . " " . $result['lastName']; ?>
            </h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Date of Birth: <?php echo $result['DOB']; ?></li>
            <li class="list-group-item">Discipline: <?php echo $result['discipline']; ?></li>
            <li class="list-group-item">University: <?php echo $result['university']; ?> </li>
            <li class="list-group-item">Qualification: <?php echo $result['qualification']; ?> </li>
            <li class="list-group-item">E-Mail: <?php echo $result['email']; ?> </li>
            <li class="list-group-item">Study Year: <?php echo $result['study_year']; ?> </li>
        </ul>
        <form action=<?php echo HTML_CONTROLLER_PATH . 'requests_friend.php' ?> method='post'>
            <input type="hidden" value=<?php echo $result['email']; ?> name="email">
            <div class="card-body">
                <?php
                if (in_array($result['email'], $_SESSION['sent_friend_requests'])) {
                    $button_name = "cancel_request";
                    $button_value = "Cancel Request";
                    $button_class = "btn-warning";
                    require PARTIALS_PATH . "/button_input_request.html.php";
                } elseif (in_array($result['email'], $_SESSION['received_friend_requests'])) {
                    $button_name = "accept_request";
                    $button_value = "Accept Request";
                    $button_class = "btn-warning";
                    require PARTIALS_PATH . "/button_input_request.html.php";
                    $button_name = "reject_request";
                    $button_value = "Reject Request";
                    $button_class = "btn-secondary";
                    require PARTIALS_PATH . "/button_input_request.html.php";
                } elseif (in_array($result['email'], $_SESSION['friends'])) {
                    $button_name = "remove_friend";
                    $button_value = "Remove Friend";
                    $button_class = "btn-danger";
                    require PARTIALS_PATH . "/button_input_request.html.php";
                } else {
                    $button_name = "send_request";
                    $button_value = "Send Request";
                    $button_class = "btn-primary";
                    require PARTIALS_PATH . "/button_input_request.html.php";
                }
                ?>
            </div>
        </form>
    </section> <br>
</div>