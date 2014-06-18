<?php 

$dsn = 'mysql:dbname=socle;host=127.0.0.1';
$user = 'socle';
$password = '0000';

try {
	$dbh = new PDO($dsn, $user, $password);
}	catch (PDOException $e) {
	echo 'Connexion échouée' .$e->getMessage();
}

$query = "SELECT `id`, `numeros` AS `telephone`
		FROM `users` AS `u` 
		INNER JOIN `phone` AS `p`
		ON `u` . `id` = `p` . `id_users` ;";
foreach ($dbh->query($query) as $row) {
	var_dump($row);
}
	