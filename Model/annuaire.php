<?php

require_once 'config.php';

$query_personnes= $bdd->query('SELECT *
							   FROM personnes
							   ORDER BY nom_personne ASC');

$personnes = [];



while ($donnees = $query_personnes->fetch()){
	$personnes[$donnees['id_personne']] = array('nom_personne' => $donnees['nom_personne'],
						           'prenom_personne' => $donnees['prenom_personne']);
}


?>

