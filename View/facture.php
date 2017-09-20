<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Facturation</title>
</head>
<body>
  	<h1>Application RANU</h1>
  	<label>Voici la liste des numéros de toutes les factures par date la plus récente vers la date la plus lointaine:</label>
  <?php
  		$compteur = 0;	
  		foreach ($invoices as $key => $value) {
  		$compteur++;
  ?>
  		<p><?= $compteur.") "?> <a href="detailfacture.php?numero_facture=<?=$value["id_facture"]?>"> <?= $value["numero_facture"]?> </a> </p>

  		
  <?php } ?>

  <a href="../index.php"> <button type="button">Retour</button> </a>
      
</body>
</html>