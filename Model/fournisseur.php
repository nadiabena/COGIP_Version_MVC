<?php

require_once 'config.php';


$query_societe_type_fournisseur= $bdd->query('SELECT * 
											  FROM societe, type 
											  WHERE type = "Fournisseur" 
											  AND societe.id_type = type.id_type');

$societe_type_fournisseur = [];

while ($donnees = $query_societe_type_fournisseur->fetch()){
	$societe_type_fournisseur[$donnees['id_societe']] = array('nom_societe' => $donnees['nom_societe']);
}


?>
