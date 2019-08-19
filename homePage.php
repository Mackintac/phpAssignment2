<!-- PHP to include the header and set the page title -->
<?php

$page_title = null;
$page_title = 'Raid Registration Homepage';

// implements header file
require_once('header.php');
?>

<h1>Welcome to the raid registration homepage</h1>
 <!-- purpose of this website -->
<p>
    The purpose of this site is to emulate that of a signup for a raid in a game like World of Warcraft. <br>
    This site was built primarily using php, html, and implementing some CRUD operations in an SQL database. <br>
    The homepage is the page you would start on. From there the average users would be able to navigate to 
    either the list of current users signed up for the raid or the signup/registration page. However, 
    certain authenticated users are able to modify the existing records as well as add their own. <br>
    
    Lastly, each page includes a header as well as a footer to reduce redundancy in code and a database connecting 
    file which automatically conencts to the database when implemented/added to the code.
</p>


<!-- PHP to include the footer -->
<?php

// implements footer file
require_once('footer.php');
?>
