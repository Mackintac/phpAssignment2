<!-- PHP to include the header and set the page title -->
<?php

$page_title = null;
$page_title = 'Page Not Found';

// implements header file
require_once('header.php');
?>


<main class="container">
<h1>Error 404: Page not found</h1>

<p class="jumbotron">The page you were attempting to reach does not exist.
Click one of the links in that navigation section to proceed to a page.</p>
</main>


<!-- PHP to include the footer -->
<?php

// implements footer file
require_once('footer.php');
?>
