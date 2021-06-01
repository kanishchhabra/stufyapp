<form style="max-width: 768px;" action=<?php echo HTML_CONTROLLER_PATH . 'filter.php' ?> method='GET'>
    <label class="form-label" for='discipline'>Discipline</label><br>
    <select class="form-select" name='discipline' id='discipline'>
        <?php
        $table_name = 'discipline';
        $column_name = 'discipline_name';
        include CONTROLLER_PATH . '/form_options_validation.php';
        ?>
    </select><br>
    <label class="form-label" for="university">University</label><br>
    <select class="form-select" name="university">
        <?php
        $table_name = 'university';
        $column_name = 'university_name';
        include CONTROLLER_PATH . '/form_options_validation.php';
        ?>
    </select><br>
    <label class="form-label" for='study_year'>Study Year</label><br>
    <select class="form-select" name='study_year' id='study_year'>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
    </select><br>
    <label class="form-label" for='qualification'>Qualification</label><br>
    <select class="form-select" name='qualification' id='qualification'>
        <?php
        $table_name = 'qualification';
        $column_name = 'qualification_name';
        include CONTROLLER_PATH . '/form_options_validation.php';
        ?>
    </select><br>
    <button class="btn btn-primary" type='submit' name='apply'>Apply Filters</button>
</form>