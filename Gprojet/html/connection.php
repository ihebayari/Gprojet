<?php 
function maConnection(){
	$base='stage';
	$serveur='localhost';
	$user='root';
	$password='';
	try{
		$bdd = new PDO("mysql:host=$serveur;dbname=$base",$user,$password);
		//le role de query est de definir la langue du dictionnaire utilisée 
		$bdd->query("set names 'utf8'");
		return $bdd;
	}
	catch(PDOException $e ) {die('erreur :'.$e->getMessage());}
}

?>