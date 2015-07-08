<?php

// mi connetto al MySql Server
$link = mysql_connect('localhost', 'root', 'toor');
if (!$link) {
    die('Could not connect: ' . mysql_error());}

// seleziono il database 
mysql_select_db('marco', $link);
 ?>
