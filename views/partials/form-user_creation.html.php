<form action=<?php echo HTML_CONTROLLER_PATH . 'create_user.php' ?> method='post'>
    <label for='fisrt_name'>First Name</label><br>
    <input type='text' name='first_name' id='first_name' placeholder='First Name'><br>

    <label for='last_name'>Last Name</label><br>
    <input type='text' name='last_name' id='last_name' placeholder='Last Name'><br>

    <label for='date_of_birth'>Date of Birth</label><br>
    <input type='date' name='date_of_birth' id='date_of_birth'><br>

    <label for='email'>Email</label><br>
    <input type='email' name='email' id='email' placeholder='john@email.com'><br>

    <label for='university'>University</label><br>
    <select name='university' id='university'>
        <?php
        $table_name = 'university';
        $column_name = 'university_name';
        include CONTROLLER_PATH . '/form_options_validation.php';
        ?>
    </select><br>

    <label for='study_year'>Study Year</label><br>
    <select name='study_year' id='study_year'>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
    </select><br>

    <label for='discipline'>Discipline</label><br>
    <select name='discipline' id='discipline'>
        <?php
        $table_name = 'discipline';
        $column_name = 'discipline_name';
        include CONTROLLER_PATH . '/form_options_validation.php';
        ?>
    </select><br>

    <label for='qualification'>Qualification</label><br>
    <select name='qualification' id='qualification'>
        <?php
        $table_name = 'qualification';
        $column_name = 'qualification_name';
        include CONTROLLER_PATH . '/form_options_validation.php';
        ?>
    </select><br>

    <label for='password'>Password</label><br>
    <input type='password' name='password' id='password'><br>

    <button type='submit' name='create_user'>Register</button>
</form>