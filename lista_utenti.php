<?php
include_once("connessione.php");
include ('utenti.php');
include ('init.php');
$test = new user();

?>
<table border="1" cellspacing="2" cellpadding="2">
 <tr>
 <th>Nome</font></th>
 <th>Cognome</font></th>
<th>Email</font></th>
 <th>Id</font></th>
 </tr>

<?php

$test->leggi();

?>
<div id="logoutButton">
        <a href="logout.php">logout</a>
    </div>