<?php 

$link = mysql_connect("localhost", "socle", "0000")
	or die("impossible de se connecter : " . mysql_error());

echo 'Connexion r�ussie';

if (mysql_select_db("socle") === FALSE) {
	die ('Imposssssible ! de s�l�ctionner la base de donn�es : ' . mysql_error());
}

$query = "SELECT *
FROM `users` 
INNER JOIN `phone`
ON `users` . `id` = `phone` . `id_users`;";
		
		

$result = mysql_query($query);

if (!$result){
	die('Requ�te invalide : ' . mysql_error());
}

while ($fetch = mysql_fetch_assoc($result)){
	
	var_dump($fetch);
}

mysql_close($link);