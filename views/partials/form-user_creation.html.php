<form action=<?php echo HTML_CONTROLLER_PATH . 'create_user.php' ?> method='post' style="max-width: 768px;">
    <label class="form-label" for='fisrt_name'>First Name</label><br>
    <input class="form-control" type='text' name='first_name' id='first_name' placeholder='First Name'><br>

    <label class="form-label" for='last_name'>Last Name</label><br>
    <input class="form-control" type='text' name='last_name' id='last_name' placeholder='Last Name'><br>

    <label class="form-label" for='date_of_birth'>Date of Birth</label><br>
    <input class="form-control" type='date' name='date_of_birth' id='date_of_birth'><br>

    <label class="form-label" for='email'>Email</label><br>
    <input class="form-control" type='email' name='email' id='email' placeholder='john@email.com'><br>

    <label class="form-label" for='university'>University</label><br>
    <select class="form-select" name='university' id='university'>
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

    <label class="form-label" for='discipline'>Discipline</label><br>
    <select class="form-select" name='discipline' id='discipline'>
        <?php
        $table_name = 'discipline';
        $column_name = 'discipline_name';
        include CONTROLLER_PATH . '/form_options_validation.php';
        ?>
    </select><br>

    <label class="form-label" for='qualification'>Qualification</label><br>
    <select class="form-select" name='qualification' id='qualification'>
        <?php
        $table_name = 'qualification';
        $column_name = 'qualification_name';
        include CONTROLLER_PATH . '/form_options_validation.php';
        ?>
    </select><br>

    <label class="form-label" for='password'>Password</label><br>
    <input class="form-control" type='password' name='password' id='password'><br>

    <button class="btn btn-primary" type='submit' name='create_user'>Register</button>
</form> <br>