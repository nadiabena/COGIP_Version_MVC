<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Facturation</title>
</head>
<body>
	<h1>Application RANU</h1>

	<label> Voici les informations concernant la société: </label> <strong><?= $tableauSociete[0]['nom_societe'] ?></strong>

	<div style="border:1px solid black; width:500px; height:400px">
		<p style="text-align:left"> <u>Adresse:</u> <?= $tableauSociete[0]["adresse_societe"] ?> </p>	
		<p style="text-align:left"> <u>Téléphone:</u> <?= $tableauSociete[0]["tel_societe"] ?> </p>
		<p style="text-align:left"> <u>TVA société:</u> <?= $tableauSociete[0]["tva_societe"] ?> </p>
		<p style="text-align:left"> <u>Compte bancaire:</u> <?= $tableauSociete[0]["compte_bancaire_societe"] ?> </p>
		<label>Voici toutes les factures lui appartenant:</u> </label>
		<?php
			if (sizeof($tableauFacturesSociete) == 0 ) {
				echo "<br/> <strong><i>Il n'y a actuellement aucune facture dédiée..</i></strong><br/><br/>";
			}else{
				$compteur=0;
				foreach ($tableauFacturesSociete as $key => $value) {
					$compteur++;
					echo "<p>".$compteur.") ".$value['numero_facture']."</p>";
				}
			}
		?>
		<label>Voici toutes les personnes travaillant dans la société:</u> </label>
		<?php
			if (sizeof($tableauPersonnesSociete) ==0 ) {
				echo "<br/> <strong><i>Il n'y a actuellement aucune personnes travaillant pour cette société..</i></strong>";
			}else{
				$compteur=0;
				foreach ($tableauPersonnesSociete as $key => $value) {
					$compteur++;
					echo "<p>".$compteur.") ".$value['nom_personne']."</p>";
				}
		}
		?>
	</div>

	<a href="../index.php"> <button type="button">Retour</button> </a>

</body>
</html>





