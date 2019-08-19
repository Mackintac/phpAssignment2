<!-- PHP to include the header and set the page title -->
<?php

$page_title = null;
$page_title = 'Delete Input Page';

// implements header file
require_once('header.php');
require_once('databaseConnect.php');
?>

<!-- delete functionality PHP --> 
<?php 
    $toon_name=$_GET['toon_name'];

    // SQL command to delete a row of values that includes the toon_name entered
    $delete = "DELETE FROM registered_toons WHERE toon_name = :toon_name";

    //Executes the command
    $cmd=$conn->prepare($delete);
    $cmd->bindParam(':toon_name', $toon_name, PDO::PARAM_STR, 14);
    $cmd->execute();
?>

<!-- PHP to include the footer -->
<?php

// implements footer file
require_once('footer.php');
?>
