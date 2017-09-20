<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Facturation</title>
</head>
<body>
	<a href="Controller/fournisseur.php">Fournisseurs</a>
	<a href="Controller/client.php">Clients</a>
	<a href="Controller/facture.php">Factures</a>
	<a href="Controller/annuaire.php">Annuaire</a>

  	<h1>Application RANU: Accueil</h1>

  <label>Bonjour </label><?= $tableauClient[0]["nom_personne"]." ".$tableauClient[0]["prenom_personne"];?>
  <br><br>
  <label>Voici la liste des 5 dernières factures, classées par date:</label>
	  <?php
	  		if(sizeof($invoices)==0) {
	  			echo "<br/> <strong><i>Il n'y a actuellement aucune factures..</i></strong><br/><br/>";
	  		}else{
		  		$compteur = 0;	
		  		foreach ($invoices as $key => $value) {
		  		$compteur++;
		  ?>
		  		<p><?= $compteur.") "?><a href="Controller/detailfacture.php?numero_facture=<?=$value["id_facture"]?>"> <?= $value["numero_facture"]?> </a> </p>
	  <?php } }?>

  <hr/>
	<label>Voici la liste des 5 dernières personnes, encodées dans la base de données:</label>
	  <?php
	  		if (sizeof($personnes)==0) {
	  			echo "<br/> <strong><i>Il n'y a actuellement aucune personne encodées dans le systéme..</i></strong><br/><br/>";
	  		}else{	
		  		$compteur = 0;
		  		foreach ($personnes as $key => $value) {
		  		$compteur++;
		  ?>
		  		<p><?= $compteur.") "?><a href="Controller/detailcontact.php?id_personne=<?=$key?>"> <?= $value["nom_personne"]?> </a> <?= ", ".$value["prenom_personne"]?> </p>
	  <?php } } ?>
	
	<hr/>
	<label>Voici la liste des 5 dernières entreprises, encodées dans la base de données:</label>
	  <?php
	  		if (sizeof($societes)==0) {
	  			echo "<br/> <strong><i>Il n'y a actuellement aucune entreprise encodée dans le systéme..</i></strong><br/><br/>";
	  		}else{	
		  		$compteur = 0;
		  		foreach ($societes as $key => $value) {
		  		$compteur++;
		  ?>
		  		<p><?= $compteur.") "?><a href="Controller/detailsociete.php?id_societe=<?=$key?>"> <?= $value["nom_societe"]?> </a> </p>
	  <?php } } ?>


</body>
</html>