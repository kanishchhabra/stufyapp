<form action=<?php echo HTML_CONTROLLER_PATH . 'login.php' ?> method="POST">
    <label for="email">Email</label> <br>
    <input type="email" name="email" placeholder="john@email.com" id="email"> <br>

    <label for="password">Password</label><br>
    <input type="password" name="password" placeholder="Password" id="password"><br>

    <button type="submit" name="login">Login</button>
</form>