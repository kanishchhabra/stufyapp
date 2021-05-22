<?php
require $_SERVER['DOCUMENT_ROOT'] . "/controller/paths.php";
?>

<form action=<?php echo HTML_CONTROLLER_PATH . 'filter.php' ?> method='get'>
<label for='discipline'>Discipline</label><br>
    <select name='discipline' id='discipline'>
        <?php
        $table_name = 'discipline';
        $column_name = 'discipline_name';
        include CONTROLLER_PATH . '/options_validation.php';
        ?>
    </select><br>
<label for="university">University</label><br>
<select name="university">
<?php
$table_name = 'university';
$column_name = 'university_name';
include CONTROLLER_PATH . '/options_validation.php';
?>
</select><br>
<label for='study_year'>Study Year</label><br>
    <select name='study_year' id='study_year'>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
    </select><br>
    <label for='qualification'>Qualification</label><br>
    <select name='qualification' id='qualification'>
        <?php
        $table_name = 'qualification';
        $column_name = 'qualification_name';
        include CONTROLLER_PATH . '/options_validation.php';
        ?>
    </select><br>
    <button type='submit' name='apply'>Apply Filters</button>






</form>
