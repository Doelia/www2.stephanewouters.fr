<?php

if (!isset($_GET['password'])) {

	echo "Entrez un mot de passe par un paramètre URL ?password=";

} else {
	$mdp = $_GET['password'];
	$crypted = @crypt($mdp);
	echo "Mot de passe $mdp crypté : $crypted"; 
}

