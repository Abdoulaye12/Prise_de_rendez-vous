<?php
$dbb = new PDO('mysql:host=localhost;dbname=rendez-vous', 'root', '');

// Vérifier si le formulaire est soumis 
if (isset($_POST['submit'])) {
	$mysqli = new PDO('mysql:host=localhost;dbname=rendez-vous;charset=utf8', 'root', '');

	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$e_mail = $_POST['e_mail'];
	$mot_de_passe = md5($_POST['mot_de_passe']);

	// afficher le résultat
	$requete = $mysqli->prepare("INSERT INTO user (prenom, nom, e_mail, mot_de_passe) 
	VALUES (:prenom, :nom, :e_mail, :mot_de_passe)");

	$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
	$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
	$requete->bindValue(':e_mail', $e_mail, PDO::PARAM_STR);
	$requete->bindValue(':mot_de_passe', $mot_de_passe, PDO::PARAM_STR);
	$requete->execute();

	echo'votre compte a été bien créée';
	require("signUp.php");

} else {
	require("signUp.php");
}
