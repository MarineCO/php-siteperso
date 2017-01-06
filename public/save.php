<?php 

//Récupération des données
	$firstname = $_POST["firstname"];
	// var_dump($firstname);
	$name = $_POST["name"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$message = $_POST["message"];
	
//Représentation JSON de $message
	$last_message = json_encode($message);
	echo $last_message;

?>