<?php
include_once("connessione.php");
include ('utenti.php');
$test = new user();

$nome = $_POST['username'];
$cognome = $_POST['password'];
$email = $_POST['email'];
$id = NULL;

$test->char($nome, $email, $cognome , $id) ;

$test->salva($test->nome , $test->cognome , $test->email);


echo 'sei registrato, adesso verrai portato alla pagina login';
header("Refresh: 3; url=index.php");
?>