<?php
include_once("init.php");
include_once("connessione.php");

session_unset();

  echo "SignOut Succesful";
        header("Refresh: 4; url= index.php"); 
        die();

/*
 * - unset all SESSION var
 * - redirect on login form with error: "SignOut Succesful"
 */
