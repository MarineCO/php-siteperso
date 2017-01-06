<?php

// Fonctions utiles dans le site.

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} else {
		include __DIR__.'/../pages/'. $_GET['page'] . '.php';
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}
