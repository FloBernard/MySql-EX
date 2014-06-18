<?php 

$link = mysqli_connect("localhost", "socle", "0000", "socle")
	or die("impossible de se connecter : " . mysqli_error());

$query = "SELECT `id` , `numeros` AS `telephone`
FROM `users` AS `u`
INNER JOIN `phone` AS `p`
ON `u` . `id` = `p` . `id_users`;";
		
		

$result = $link->query($query);

while ($row = mysqli_fetch_assoc($result)){
	var_dump($row);
}