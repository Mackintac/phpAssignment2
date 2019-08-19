<!-- starts a session -->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>

<?php
require_once('databaseConnect.php');
?>

<!-- navigation bar to navigate the website -->
<nav class="navbar">
    <h1>Raid Info Navigation Bar</h1>
    <ul class ="nav navbar-brand">
        <li><a href='dataList.php'  title='userList'>User List</a></li>
        <li><a href='raidRegister.php' title='register'>Raid Registration</a></li>

        <?php

        // attempted to get this working, unsure where I went wrong
        if(!empty($_SESSION['user_id']))
        {
        echo"<li><a href='raidRegister.php' title='raidRegister'>Raid Registration</a></li>";
        echo "<li><a href='deleteList.php' title='deleteInput'>Delete input</a></li>";
        echo "<li><a href='editList.php'  title='editInput'>Edit List</a></li>";
        }

        
        else
        {
        echo"<li><a href='createLogin.php' title='Create Login'> Create Login</a></li>";
        echo"<li><a href='login.php' title='Login'>Log in</a></li>";
        }
        ?>

    </ul>
</nav>  