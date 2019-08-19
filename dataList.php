<!-- PHP to include the header and set the page title -->
<?php
$page_title = null;
$page_title = 'Raid Signup List';

require_once('header.php');
?>
<?php

//prepare sql query
$sql = "SELECT * 
FROM registered_toons";

//run query and store results
$cmd = $conn->prepare($sql);
$cmd ->execute();
$raidUsers = $cmd->fetchAll();

//List to display raid user information

echo 
'<table class="table table-striped table-hover">
<thread>
<th>Toon Name</th>
<th>Toon Class</th>
<th>Toon Role</th>
<th>Toon Item Level</th>
<th>Delete</th>
<th>Edit</th>
</thread>
<tbody>';

//foreach loop to gather data and display the results
foreach($raidUsers as $ru){
    echo 
    '<tr>
    <td>' . $ru['toon_name']                                .   '</td>
    <td>' . $ru['toon_class']                               .   '</td>
    <td>' . $ru['toon_role']                                .   '</td>
    <td>' . $ru['item_level']                               .   '</td>
    <td><a href="deleteList.php?toon_name=' . $ru['toon_name']  .
    '" onclick="return confirm(\'Confirm deletion\');" >Delete</a></td>
    <td><a href="raidRegister.php?toon_name=' . $ru['toon_name'] . '">Edit</a></td>
    </tr>';
    }

//close raid user data list that was opened before
echo '</tbody></table>';

?>

<!-- PHP to include the footer -->
<?php

require_once('footer.php');
?>
