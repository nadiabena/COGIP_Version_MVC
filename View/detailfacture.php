<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Facturation</title>
</head>
<body>
	<h1>Application RANU</h1>

	<label>Détails de la facture numéro </label><strong><?=  $invoices[0]["numero_facture"]; ?></strong> <!-- $numero_facture; -->
	<div style="border:1px solid black; width:500px; height:300px">
		<p style="text-align:left"> Société <strong> <?= $invoices[0]["nom_societe"] ?> </strong> - Type <strong> <?= $invoices[0]["type"] ?> </strong> </p>
  		<p style="text-align:center"> <?= $invoices[0]["nom_personne"].", ".$invoices[0]["prenom_personne"] ?> </p>
		<br/><br/>

		<?php
            $date = $invoices[0]["date_facture"];
            $date = explode("-", $date);
            $annee = $date[0];
            $mois = $date[1];
            $jour = $date[2];

            $date = $jour."/".$mois."/".$annee;

            $dateEcheance = $invoices[0]["date_echeance_facture"];
            $dateEcheance = explode("-", $dateEcheance);
            $anneeEcheance = $dateEcheance[0];
            $moisEcheance = $dateEcheance[1];
            $jourEcheance = $dateEcheance[2];

            $dateEcheance = $jourEcheance."/".$moisEcheance."/".$anneeEcheance;

        ?>

		<p> <?= "Date démission: ".$date ?> </p>
		<p> <?= "Date d'échéance: ".$dateEcheance ?> </p>

  	</div>

	<a href="../index.php"> <button type="button">Retour</button> </a>
  
</body>
</html>



