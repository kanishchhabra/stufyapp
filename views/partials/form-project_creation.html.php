<form action=<?php echo HTML_CONTROLLER_PATH . 'create_project.php' ?> method='post'>
    <label for='project_name'>Project Name</label><br>
    <input type='text' name='project_name' id='project_name' placeholder='Project Name'><br>

    <label for='project_description'>Project Description</label><br>
    <textarea name="project_description" id="project_description" cols="30" rows="10" placeholder="Description of the project goes here..." wordwrap></textarea><br>

    <label for='discipline'>Discipline</label><br>
    <select name='discipline' id='discipline'>
        <?php
        $table_name = 'discipline';
        $column_name = 'discipline_name';
        include CONTROLLER_PATH . '/form_options_validation.php';
        ?>
    </select><br>

    <label for='project_status'>Status</label><br>
    <select name='project_status' id='project_status'>
        <option value='0'>Open</option>
        <option value='1'>Ongoing</option>
        <option value='2'>Closed</option>
    </select><br>

    <button type='submit' name='create_project'>Create Project</button>
</form>