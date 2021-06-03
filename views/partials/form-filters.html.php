<form class="mb-3" style="max-width: 768px;" method='GET'>
    <h2>Discipline</h2>
    <?php
    $table_name = 'student';
    $column_name = 'discipline';
    include CONTROLLER_PATH . '/form_checkbox_validation.php';
    ?><br>

    <h2>University</h2>
    <?php
    $table_name = 'student';
    $column_name = 'university';
    include CONTROLLER_PATH . '/form_checkbox_validation.php';
    ?><br>

    <h2>Study Year</h2>
    <?php
    $table_name = 'student';
    $column_name = 'study_year';
    include CONTROLLER_PATH . '/form_checkbox_validation.php';
    ?><br>

    <h2>Qualification</h2>
    <?php
    $table_name = 'student';
    $column_name = 'qualification';
    include CONTROLLER_PATH . '/form_checkbox_validation.php';
    ?><br>
    <button class="btn btn-primary" type='submit' name='apply'>Apply Filters</button>
</form>