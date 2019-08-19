<?php

//Connect to database PDO
$conn = new PDO('mysql:host=52.60.209.3;dbname=gcc200358108', 
'gcc200358108', 'uZvj05E48J');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Connect to database MySQLi
$mysqli = NEW MySQLi('52.60.209.3', 'gcc200358108','uZvj05E48J', 
'gcc200358108');
?>