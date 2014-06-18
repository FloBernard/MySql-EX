<?php 

$link = mysql_connect("localhost", "socle", "0000")
	or die("impossible de se connecter : " . mysql_error());

echo 'Connexion réussie';

if (mysql_select_db("socle") === FALSE) {
	die ('Imposssssible ! de séléctionner la base de données : ' . mysql_error());
}

$result = mysql_query('SELECT * FROM `users`;');

if (!$result){
	die('Requête invalide : ' . mysql_error());
}

$fetch = mysql_fetch_assoc($result);

var_dump($fetch);

mysql_close($link);