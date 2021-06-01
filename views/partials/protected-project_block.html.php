<div class="col">
    <section class="card container-fluid">
        <div class="card-body">
            <h4 class="card-title"><?php echo $result['project_name']; ?></h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Project ID: <?php echo $result['project_id']; ?></li>
            <li class="list-group-item">Description: <?php echo $result['project_description']; ?></li>
            <li class="list-group-item">Discipline: <?php echo $result['discipline']; ?></li>
            <li class="list-group-item">Coordinator: <?php echo $result['coordinator']; ?> </li>
            <li class="list-group-item">Status: <?php
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
    </section><br>
</div>