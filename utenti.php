<?php
include_once("connessione.php");

class user
{
    //attributi
    public   $id;
    public   $nome;
    public   $cognome;
    public   $email;
 
    //Metodi 
    public function leggi() {
    $ris=   mysql_query ("SELECT * FROM utenti");
    while ($riga = mysql_fetch_assoc($ris)) {?>
        <tr>
    <td><?php echo $riga["nome"];?> </td>
    <td><?php echo $riga["cognome"];?></td>
    <td><?php echo $riga["email"];?></td>
    <td><?php echo $riga["id"];?></td>
    <?php echo "<td><a href='dettaglio.php?id=$riga[id]'>modifica</td></a>";?>
            <?php echo "<td><a href='elimina.php?id=$riga[id]'>elimina</td></a>";}?>
  </tr>
 <?php
    }
    public function aggiorna($nome, $email, $cognome , $id){
    mysql_query("UPDATE utenti SET nome='$nome', email='$email', cognome='$cognome' WHERE id='$id'");
    }
 
    public function salva($nome, $cognome , $email){
    mysql_query("INSERT INTO utenti (nome, cognome, email) VALUES ( '$nome', '$cognome', '$email')");   
    }
 
    public function cancella($id){
    mysql_query("DELETE FROM utenti WHERE id=$id");
    } 
        
    public function char($nome, $email, $cognome , $id){
    if(get_magic_quotes_gpc())
	{
		$nome      = stripslashes($nome);
		$email     = stripslashes($email);
		$id = stripslashes($id);
        $cognome = stripslashes($cognome);
	}

	$nome      = mysql_real_escape_string($nome);
	$email     = mysql_real_escape_string($email);
	$id = mysql_real_escape_string($id);   
    $cognome = mysql_real_escape_string($cognome);
        
    $this->nome = $nome;
    $this->id = $id;
     $this->cognome = $cognome;
     $this->email = $email;
}
}
?>