<?php
$id = $_GET['id'];

//carico init
include_once("init.php");
include_once("connessione.php");
include ('utenti.php');
$test = new user();


//form per la modifica
echo "<form id='loginForm' method='POST'>";
echo "<input type='text' name='nome' placeholder='nome'>Nome<br>";
echo "<input type='text' name='cognome' placeholder='cognome'>Cognome<br>";
echo "<input type='text' name='email' placeholder='email'>Email<br>";
echo "<input type='text' name='id' placeholder='$id' readonly>Id<br>";
echo "<input type='submit' name='pulsante' value='modifica'>";
echo "</form>";

if(isset($_POST['pulsante'])){
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
     
    $test->char($nome, $email, $cognome , $id) ;

    $test->aggiorna($test->nome, $test->email, $test->cognome , $test->id);
    echo $test->nome;
 
   header("location: lista_utenti.php");}