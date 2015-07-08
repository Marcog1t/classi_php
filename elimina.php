<?php
//carico init
include_once("init.php"); 
include_once("connessione.php");
include ('utenti.php');
$test = new user();
$id = $_GET['id'];


$test->cancella($id);
/*

$query = "DELETE FROM utenti WHERE id=$id";
 $ris = mysql_query($query, $link);
     echo 'utente eliminato, torna indietro';
    */ header("Refresh: 4; url=lista_utenti.php");
?>