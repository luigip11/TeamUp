<!-- Product by Virtual LP -->
<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'Luigi93.P11';
$DATABASE_NAME = 'team_up';
// Prova e connetti in base ai dati elencati.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME); 
$_SESSION["email"] = "email";

if ( mysqli_connect_errno() ) {
	// Se c'è un errore di connessione, ferma lo script e restituisci errore.
	exit('Connessione fallita a MySQL: ' . mysqli_connect_error());
}

