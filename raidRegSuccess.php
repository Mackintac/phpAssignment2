
<!-- PHP to include the header, database connection, and set the page title -->
<?php

$page_title = null;
$page_title = 'Registration Success';

require_once('header.php');

?>
<h1>Raid Registration Success!</h1>

<?php

$toon_name=$_POST['toon_name'];
$toon_class=$_POST['toon_class'];
$toon_role=$_POST['toon_role'];
$item_level=$_POST['item_level'];
$toon_pic=$_POST['toon_pic'];
$updating=$_POST['updating'];

//if this variable changes to false, input isn't valid
$ok = true;

// checking all input values

if(empty($toon_name))
{
    //notify user their input is required
    echo 'Toon Name is REQUIRED! <br />';

    //turns ok variable to false
    $ok = false;
}

if(empty($toon_class))
{
    //notify user their input is required
    echo 'Toon Class is REQUIRED! <br />';

    //turns ok variable to false
    $ok = false;
}

if(empty($toon_role))
{
    //notify user their input is required
    echo 'Toon ROLE is REQUIRED! <br />';

    //turns ok variable to false
    $ok = false;
}

if(empty($item_level))
{
    //notify user their input is required
    echo 'ITEM LEVEL is REQUIRED! <br />';

    //turns ok variable to false
    $ok = false;
}

//if all data is valid, save it to SQL database
if($ok == true)
{

    require_once('databaseConnect.php');
    if($updating == '0')
    {
        //inserts information into database table
        $sql = "INSERT INTO registered_toons (toon_name, toon_class, toon_role, item_level) 
        VALUES(:toon_name, :toon_class, :toon_role, :item_level)";
    }

    else
    {
        $sql = "UPDATE registered_toons 
        SET toon_name = :toon_name, toon_class = :toon_class, toon_role = :toon_role, item_level = :item_level 
        WHERE toon_name = toon_name";
    }
    
    

    
    // fill parameters with form values
    $cmd = $conn->prepare($sql);
    $cmd->bindParam(':toon_name', $toon_name,   PDO::PARAM_STR, 14);
    $cmd->bindParam(':toon_class', $toon_class,   PDO::PARAM_STR, 24);
    $cmd->bindParam(':toon_role', $toon_role,     PDO::PARAM_STR, 8);
    $cmd->bindParam(':item_level', $item_level, PDO::PARAM_INT);

    //execute commands
    $cmd->execute();

    //disconnect from MySQLi and PDO
    $conn = null;
    $mysqli = null;
}
?>

<!-- Links to register page -->
<a href="dataList.php" title="">Click to visit the list of registered users</a>
</body>
</html>