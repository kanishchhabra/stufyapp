<div style="display: none;" id="studentsFilters">
    <h2>Filters</h2>
    <form class="card mb-3 pt-3 p-2" method='GET'>
        <div class="row row-cols-auto">

            <div class="card-body">
                <h3>Discipline</h3>
                <?php
                $table_name = 'student';
                $column_name = 'discipline';
                include CONTROLLER_PATH . '/form_checkbox_validation.php';
                ?><br>
            </div>

            <div class="card-body">
                <h3>University</h3>
                <?php
                $table_name = 'student';
                $column_name = 'university';
                include CONTROLLER_PATH . '/form_checkbox_validation.php';
                ?><br>
            </div>

            <div class="card-body">
                <h3>Study Year</h3>
                <?php
                $table_name = 'student';
                $column_name = 'study_year';
                include CONTROLLER_PATH . '/form_checkbox_validation.php';
                ?><br>
            </div>

            <div class="card-body">
                <h3>Qualification</h3>
                <?php
                $table_name = 'student';
                $column_name = 'qualification';
                include CONTROLLER_PATH . '/form_checkbox_validation.php';
                ?><br>
            </div>
        </div>
    </form>
    <a class="btn btn-warning mb-2" name='filter' id="filterHide">Hide</a>
</div>