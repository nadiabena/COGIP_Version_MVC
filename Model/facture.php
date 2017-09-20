<?php
require_once 'config.php';

//Display all invoices 
$query_invoices= $bdd->query('SELECT id_facture, numero_facture
							  FROM factures
							  ORDER BY date_facture DESC');

$invoices = [];

while ($donnees = $query_invoices->fetch()){
	$invoices[] = array('id_facture' => $donnees['id_facture'],
						'numero_facture' => $donnees['numero_facture']);
}

?>
