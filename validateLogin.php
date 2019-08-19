<!-- output buffer start -->
<?php
 ob_start(); 
?>

<?php
require_once('databaseConnect.php');

// login variables
$username = $_POST['username'];
$password = $_POST['password'];

try
{
// prepare sql query
$sql = "SELECT * 
FROM raid_users 
WHERE username = :username";

// run query and store results
$cmd = $conn->prepare($sql);
$cmd->bindParam(':username', $username, PDO::PARAM_STR, 25);
$cmd->execute();
$raid_users = $cmd->fetch();

if (password_verify($password, $raid_users['password'])) 
{
    // if the password is verified, redirect to dataList page
    
    $_SESSION['user_id'] = $raid_users['user_id'];
    header('location:dataList.php');
}

else 
{
    // if information is not in database, return to login page and don't start a session
    header('location:login.php?invalid=true');

    //exits the script
    exit();
}


$conn = null;
}
catch(Exception $e)
{
    mail('200358108@student.georgianc.on.ca', 'Error', $e);
}
?>




</body>
</html>

<!--  -->
<?php ob_flush(); ?>