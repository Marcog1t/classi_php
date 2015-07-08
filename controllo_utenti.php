<?php
//inclusione dei file init
include_once("connessione.php");

//raccolta dei dati provenienti dal login
$nome = $_POST['username'];
$pass = $_POST['password'];

if(get_magic_quotes_gpc())
	{
		$nome      = stripslashes($nome);
		$pass     = stripslashes($pass);
	}
	$nome      = mysql_real_escape_string($nome);
	$pass     = mysql_real_escape_string($pass);


//query che seleziona i campi nome e cognome
 $query = "SELECT * FROM utenti WHERE nome = '$nome' AND cognome = '$pass' ";
 $ris = mysql_query($query, $link) or die (mysql_error());
 $riga=mysql_fetch_array($ris);  
 
/*Prelevo l'identificativo dell'utente */
$cod=$riga['nome'];
 
// controllo il valore di num/
if ($cod == NULL) $trovato = 0 ;
else $trovato = 1;  
 
// Username e password corrette //
if($trovato == 1) {
    echo 'dati validi, puoi proseguire';
    header("Refresh: 4; url=lista_utenti.php");
session_start();
    $_SESSION["user"] = $cod;
}
else {
    echo 'utente non trovato, verrai riportato al login'; 
      header("Refresh: 4; url=log.php");}
    

?>