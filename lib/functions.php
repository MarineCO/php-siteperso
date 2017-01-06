<?php

// Fonction permettant affichage des différentes pages

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} else {
		include __DIR__.'/../pages/'. $_GET['page'] . '.php';
	}
}

/* Fonction permettant l'inclusion du contenu d'un fichier dans un autre */

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

/* Fonction permettant de récupérer le contenu du fichier 'data/user.json' via 'file_get_contents' + json to tableau PHP via 'json_decode' + affichage infos recueillies*/

function getUserData() {
	$path = '../data/user.json';

	$userData = file_get_contents($path);
	//echo $userData;

	return json_decode($userData);
}

