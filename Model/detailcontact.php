<?php

require_once 'config.php';

if(isset($_GET["id_personne"])){
	$id_personne = $_GET["id_personne"];
}

$query_personnes = $bdd->query('SELECT *
							    FROM personnes p, societe s
							    WHERE p.id_societe = s.id_societe 
                                AND id_personne ='.$id_personne);

$personnes = [];

$donnees = $query_personnes->fetch();
$personnes[] = array('nom_personne' => $donnees['nom_personne'],
					 'prenom_personne' => $donnees['prenom_personne'],
                     'tel_personne' => $donnees['tel_personne'],
                     'email_personne' => $donnees['email_personne'],
                     'nom_societe' => $donnees['nom_societe'],
                     'adresse_societe' => $donnees['adresse_societe']);


//liste des factures traitées par la personne
$query_liste_factures = $bdd->query('SELECT id_facture, numero_facture
                                     FROM personnes p, factures f
                                     WHERE p.id_personne = f.id_personne 
                                     AND p.id_personne ='.$id_personne);
$liste_factures = [];

while($donnees = $query_liste_factures->fetch()){
  $liste_factures[] = array('id_facture' => $donnees['id_facture'],
                            'numero_facture' => $donnees['numero_facture']);
}


?>
