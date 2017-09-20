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
  <label>Voici la liste de toutes les personnes de contact de la base de données, par ordre alphabétique: </label>
  <?php
  		$compteur = 0;	
  		foreach ($personnes as $key => $value) {
  		$compteur++;
  ?>
  		<p><?= $compteur.") "?><a href="detailcontact.php?id_personne=<?=$key?>"> <?= $value["nom_personne"]?> </a> <?= ", ".$value["prenom_personne"]?> </p>

  		
  <?php } ?>

  <a href="../index.php"> <button type="button">Retour</button> </a>

</body>
</html>