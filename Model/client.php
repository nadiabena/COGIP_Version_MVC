<?php

require_once 'config.php';


$query_societe= $bdd->query('SELECT s.nom_societe, s.id_societe
							 FROM societe s, type t
							 WHERE s.id_type = t.id_type
							 AND t.type = "client" ');

$societes = [];

while ($donnees = $query_societe->fetch()){
	$societes[] = array( 'id_societe' => $donnees['id_societe'], 
						 'nom_societe' => $donnees['nom_societe']);
}

?>


