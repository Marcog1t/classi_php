<?php 

//carico init
include_once("init.php");
include_once("connessione.php");

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$id = $_POST['id'];

$query = "SELECT * FROM utenti";
 $ris = mysql_query($query, $link) or die (mysql_error());
?>