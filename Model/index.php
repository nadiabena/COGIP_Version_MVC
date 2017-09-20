<?php

require_once 'config.php';


$query_client = $bdd->query('SELECT * 
						     FROM personnes 
						     WHERE nom_personne = "Ranu" AND prenom_personne = "Jean-Christian"');

$tableauClient = [];

$donnees = $query_client->fetch();
$tableauClient[] = array('prenom_personne' => $donnees['prenom_personne'],
						 'nom_personne' => $donnees['nom_personne']);


//Get 5 invoices order by DESC date 
$query_invoices= $bdd->query('SELECT id_facture, numero_facture 
						 	  FROM factures, societe, personnes
						 	  WHERE factures.id_personne = personnes.id_personne
						 	  AND factures.id_societe = societe.id_societe
						 	  ORDER BY date_facture DESC
						 	  LIMIT 5');

$invoices = [];
while ($donnees = $query_invoices->fetch()){
	$invoices[] = array('id_facture' => $donnees['id_facture'],
						'numero_facture' => $donnees['numero_facture']);
}


//Get les 5 derniéres personnes encodées dans la base de données 
$query_personnes= $bdd->query('SELECT *
						 	   FROM personnes
						 	   ORDER BY id_personne DESC
						 	   LIMIT 5');

$personnes = [];
while ($donnees = $query_personnes->fetch()){
	$personnes[$donnees['id_personne']] = array('nom_personne' => $donnees['nom_personne'],
												'prenom_personne' => $donnees['prenom_personne'],
												);
}

//Get les 5 derniéres entreprises encodées dans la base de données 
$query_societes= $bdd->query('SELECT *
						 	  FROM societe
						 	  ORDER BY id_societe DESC
						 	  LIMIT 5');

$societes = [];
while ($donnees = $query_societes->fetch()){
	$societes[$donnees['id_societe']] = array('nom_societe' => $donnees['nom_societe']);
}

?>

