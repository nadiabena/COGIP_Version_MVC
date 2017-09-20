<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Facturation</title>
</head>
<body>


  <h1>Application RANU</h1>

  <label></label>
  <br><br>
  <label>Voici la liste de toutes les sociétés de type <strong>fournisseur</strong> :</label>
  <?php
  		$compteur = 0;	
  		foreach ($societe_type_fournisseur as $key => $value) {
  		$compteur++;
  ?>
  		<p><?= $compteur.") "?><a href="detailsociete.php?id_societe=<?=$key?>"> <?= $value["nom_societe"]?> </a> </p>

  		
  <?php } ?>

  <a href="../index.php"> <button type="button">Retour</button> </a>

</body>
</html>