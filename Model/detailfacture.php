<?php

require_once 'config.php';

if(isset($_GET['id_facture'])){ //numero_facture
	$numero_facture = $_GET['id_facture'];    //numero_facture
	echo "eee";	
}

//echo 'Numero facture:  '.$numero_facture;
/*$query_id_facture = $bdd->query('SELECT id_facture 
							  	 FROM factures 
							  	 WHERE numero_facture = '. $bdd->quote($numero_facture)); */

//$resultat = $query_id_facture->fetch();

//echo 'test'.$resultat->rowcount();
//if($resultat->rowcount())

//echo "testttttttttt ".$resultat['id_facture'];


//Details of the invoice selected 
$query_invoices= $bdd->query('SELECT f.id_facture, f.numero_facture, f.date_facture, f.date_echeance_facture, p.nom_personne, p.prenom_personne, s.nom_societe, t.type  
							  FROM factures f, societe s, personnes p, type t 
							  WHERE f.id_personne = p.id_personne 
							  AND f.id_societe = s.id_societe 
							  AND t.id_type =s.id_type
							  AND f.id_facture = '. $numero_facture ); //$resultat['id_facture'] //$numero_facture //AND numero_facture = '. $bdd->quote($numero_facture) );
$invoices = [];

while ($donnees = $query_invoices->fetch()){
	$invoices[] = array('id_facture' => $donnees['id_facture'],
						'numero_facture' => $donnees['numero_facture'],
						'date_facture' => $donnees['date_facture'],
						'date_echeance_facture' => $donnees['date_echeance_facture'],
						'nom_personne' => $donnees['nom_personne'],
						'prenom_personne' => $donnees['prenom_personne'],
						'nom_societe' => $donnees['nom_societe'],
						'type' => $donnees['type']
						);
}




?>
