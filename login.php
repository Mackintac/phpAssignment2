<!-- PHP to include the header, database connection, and set the page title -->
<?php

$page_title = null;
$page_title = 'Login';

require_once('header.php');

require_once('databaseConnect.php');
?>

<!-- Form for logging in -->
<form method="post" action="validateLogin.php">

<fieldset class="form-group">
    <label for="username" class="col-sm-2">Username</label>
    <input name="username" id="username" required />
</fieldset>

<fieldset class="form-group">
    <label for="password" class="col-sm-2">Password</label>
    <input name="password" id="password" required type="password">
</fieldset>

<button class="btn btn-danger">Log in</button>
</form>

<!-- PHP to include the footer -->
<?php

require_once('footer.php');
?>
