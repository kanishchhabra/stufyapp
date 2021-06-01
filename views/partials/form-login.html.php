<form style="max-width: 768px;" action=<?php echo HTML_CONTROLLER_PATH . 'login.php' ?> method="POST">
    <label class="form-label" for="email">Email</label> <br>
    <input class="form-control" type="email" name="email" placeholder="john@email.com" id="email"> <br>

    <label class="form-label" for="password">Password</label><br>
    <input class="form-control" type="password" name="password" placeholder="Password" id="password"><br>

    <button class="btn btn-primary" type="submit" name="login">Login</button>
</form> <br>