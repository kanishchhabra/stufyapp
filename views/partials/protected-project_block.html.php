<section>
    <ul>
        <li><?php echo $result['project_name']; ?></li>
        <ul>
            <li>Project ID: <?php echo $result['project_id']; ?></li>
            <li>Description: <?php echo $result['project_description']; ?></li>
            <li>Disciline: <?php echo $result['discipline']; ?></li>
            <li>Coordinator: <?php echo $result['coordinator']; ?> </li>
            <li>Status: <?php
                        switch ($result['coordinator']) {
                            case 0:
                                echo "Open";
                                break;
                            case 1:
                                echo "Ongoing";
                                break;
                            case 2:
                                echo "Closed";
                                break;
                            default:
                                echo "Inavid Status";
                                break;
                        }
                        ?></li>
        </ul>

    </ul>
</section> <br>