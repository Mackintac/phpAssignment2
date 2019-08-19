<!-- PHP to include the header, database connection, and set the page title -->
<?php

$page_title = null;
$page_title = 'Raid Registration';

require_once('header.php'); 


// checks to see whether it's creating or updating
if(!empty($_GET['toon_name']))
{
    $toon_name = $_GET['toon_name'];
    require('databaseConnect.php');
    $sql = 'SELECT * FROM registered_toons WHERE toon_name = :toon_name';
    $cmd = $conn->prepare($sql);
    $cmd->bindParam(':toon_name', $toon_name, PDO::PARAM_STR, 14);
    $cmd->execute();
    $toon = $cmd->fetch(); 
}
?>

<h1>Raid Registration Form</h1>

<!-- Form element for creating a raid registration input -->
<form method="post" action="raidRegSuccess.php">

<fieldset class="form-group">
    <label for="toon_name" class="col-sm-2">Toon/Character Name</label>
    <input name="toon_name" id="toon_name" required value="<?php 
    if(!empty($_GET['toon_name']))
    {
        echo $toon['toon_name'];
    } 
    ?>"/>
</fieldset>

<fieldset class="form-group">
    <label for="toon_class" class="col-sm-2">Toon Class</label>
    <input name="toon_class" id="toon_class" required value="<?php 
    if(!empty($_GET['toon_name']))
    {
        echo $toon['toon_class'];
    } 
    ?>"/>
</fieldset>

<fieldset class="form-group">
    <label for="toon_role" class="col-sm-2">Role</label>
    <input name="toon_role" id="toon_role" required value="<?php 
    if(!empty($_GET['toon_name']))
    {
        echo $toon['toon_role'];
    } 
    ?>"/>
</fieldset>

<fieldset class="form-group">
    <label for="item_level" class="col-sm-2">Toon Item Level</label>
    <input name="item_level" id="item_level" required value="<?php 
    if(!empty($_GET['toon_name']))
    {
        echo $toon['item_level'];
    } 
    ?>"/>

</fieldset>
<fieldset>
    <input name="updating" id="id" hidden value="<?php
    if(!empty($_GET['toon_name']))
    {
        echo '1';
    }
    else
    {
        echo'0';
    }
    ?>"/>
</fieldset>

<!-- image update -->
<fieldset class="form-group">
            <label for="toon_pic" class="col-sm-2">Pic of character</label>
            <input type="file" id="toon_pic" name ="toon_pic"/>
        </fieldset>

<button class="btn btn-danger">Finish Registration</button>

<!-- PHP to include the footer -->
<?php

require_once('footer.php');
?>