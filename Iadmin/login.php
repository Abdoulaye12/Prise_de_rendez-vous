<?php session_start();
include("connexion.php");

if (isset($_POST['submit'])) {
	$e_mail = mysqli_real_escape_string($mysqli, $_POST['e_mail']);
	$mot_de_passe = mysqli_real_escape_string($mysqli, $_POST['mot_de_passe']);

	if ($e_mail == "" || $mot_de_passe == "") {
		echo "Entrer un nom d'utilisateur et un mot de passe";
		echo "<br/>";
		echo "<a href='login.php'>Retour</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM user WHERE e_mail='$e_mail' AND mot_de_passe='" . md5($mot_de_passe) . "'")
			or die("Could not execute the select query.");

		$row = mysqli_fetch_assoc($result);

		if (is_array($row) && !empty($row)) {
			$validuser = $row['e_mail'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['prenom'] = $row['prenom'];
			$_SESSION['nom'] = $row['nom'];
			$_SESSION['e_mail'] = $row['e_mail'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo 'Email ou mot de passe incorrect';
			include("login2.php");
		}
		if (isset($_SESSION['valid'])) {
			header('Location: index.php');
		}
	}
} else {
	include("login2.php");
}
