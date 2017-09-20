<?php

require_once 'config.php';

if(isset($_GET["id_societe"])){
	$id_societe = $_GET["id_societe"];
}

$query_societe = $bdd->query('SELECT s.nom_societe, s.adresse_societe, s.tel_societe, s.tva_societe, s.compte_bancaire_societe
							  FROM societe s
							  WHERE s.id_societe ='.$id_societe);

/*
SELECT s.nom_societe, s.adresse_societe, s.tel_societe, s.tva_societe, s.compte_bancaire_societe, f.numero_facture, p.nom_personne
							  FROM societe s, factures f, personnes p
							  WHERE s.id_societe = f.id_societe
							  AND p.id_societe = s.id_societe
							  AND p.id_personne = f.id_personne'
*/

$tableauSociete = [];

$donnees = $query_societe->fetch();

$tableauSociete[] = array('nom_societe' => $donnees['nom_societe'],
						  'adresse_societe' => $donnees['adresse_societe'],
						  'tel_societe' => $donnees['tel_societe'],
						  'tva_societe' => $donnees['tva_societe'],
						  'compte_bancaire_societe' => $donnees['compte_bancaire_societe']
						 );

//liste des factures liées à la société
$query_factures_societe = $bdd->query('SELECT id_facture, numero_facture 
									   FROM societe s, factures f 
									   WHERE s.id_societe ='.$id_societe.'
									   AND s.id_societe = f.id_societe');

$tableauFacturesSociete = [];
while($res = $query_factures_societe->fetch()){
	$tableauFacturesSociete[] = array(
									  'id_facture' => $res['id_facture'],
									  'numero_facture' => $res['numero_facture']);
}

//liste des personnes de contact travaillant dans la société
$query_personnes_societe = $bdd->query('SELECT nom_personne
									    FROM societe s, personnes p
									    WHERE s.id_societe ='.$id_societe.'
									    AND s.id_societe = p.id_societe');

$tableauPersonnesSociete = [];
while($res = $query_personnes_societe->fetch()){
	$tableauPersonnesSociete[] = array('nom_personne' => $res['nom_personne']);
}



/*
$tableauSociete[] = array('nom_societe' => $donnees['nom_societe'],
						  'adresse_societe' => $donnees['adresse_societe'],
						  'tel_societe' => $donnees['tel_societe'],
						  'tva_societe' => $donnees['tva_societe'],
						  'compte_bancaire_societe' => $donnees['compte_bancaire_societe'],
						  'numero_facture' => $donnees['numero_facture'],
						  'prenom_personne' => $donnees['prenom_personne'],
						  'nom_personne' => $donnees['nom_personne']); */

?>


