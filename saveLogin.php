<?php

require_once('header.php');
?>

<h1>Login creation succeeded!</h1>

<?php

//Registration input validation
$username = $_POST['username'];
$password = $_POST['password'];

//if this variable changes to false, input isn't valid
$ok = true;

if(empty($username))
{
    echo'Please input a Username <br />';
    $ok = false;
}

if(empty($password))
{
    echo'Please input a password <br />';
    $ok = false;
}

if($ok == true)
{
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO raid_users(username, password)
    VALUES(:username, :password)";

    $cmd = $conn->prepare($sql); 

    //Binds these parameters
    $cmd->bindParam(':username', $username, PDO::PARAM_STR, 25);
    $cmd->bindParam(':password', $password, PDO::PARAM_STR, 255);

    //Execute the above commands
    $cmd->execute();

    //Confirmation message
    echo "Raid registrations has been successful! <br /";
    
    //disconnect from MySQLi and PDO
    $conn = null;
    $mysqli = null;
}



?>

<!-- Links to register page -->
<a href="raidRegister.php" title="">Click to visit the Register Page</a>