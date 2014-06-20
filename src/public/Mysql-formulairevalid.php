<?php

$errMessages = array();
$data = $_POST;

if (empty($data)){
	$errMessages[] = "Aucun formulaire";	
}else{
	if (!(isset($data['nom']) AND !empty($data['nom']))) {
		$errMessages[] = "Nom Obligatoire";
		
	} elseif (preg_match('/[^A-Za-z -]/', $data['nom'])) {
		$errMessages[] = "Nom Incorrect";
	}
	
	if (!(isset($data['prenom']) AND !empty($data['prenom']))) {
		$errMessages[] = "Prenom Obligatoire";
	
	} elseif (preg_match('/[^A-Za-z -]/', $data['prenom'])) {
		$errMessages[] = "Prenom Incorrect";
	}
}

if(!empty($errMessages)){
	var_dump($errMessages);
	exit;
} 

/**
 * Version MySql
$link = mysql_connect("localhost", "formulaire", "0000")
or die("Impossible de se connecter : " . mysql_error());

$db_selected = mysql_select_db('formulaire');
if (!$db_selected) {
	die ('Impossible de sélectionner la base de données : ' . mysql_error());
}

$query = "INSERT INTO identifiant VALUES (NULL, '" . $data['nom'] . "', '" . $data['prenom'] . "');";
mysql_query($query);

mysql_close($link);


 */
/**
 * Version MySqli
$mysqli = new mysqli("localhost", "formulaire", "0000", "formulaire");
$query = "INSERT INTO identifiant VALUES (NULL, '" . $data['nom'] . "', '" . $data['prenom'] . "');";
$mysqli->query($query);
$mysqli->close();
echo "Enregistrement";
 */

/** Version PDO */
/** Création du DSN*/
$dsn = "mysql:dbname=formulaire;host=localhost";
/** Création de l'objet PDO*/
$dbh = new PDO($dsn, "formulaire", "0000");
/** Création de la requete SQL*/
$sql = "INSERT INTO identifiant (nom, prenom) VALUES (:nom, :prenom)";
/** Préparation de la requete avec l'objet PDO*/
$sth = $dbh->prepare($sql);
/** Execution de la préparation*/
$sth->execute(array(
	':nom' => $data['nom'],
	':prenom' => $data['prenom']
));
echo "Bingo!";