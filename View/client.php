<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Facturation</title>
</head>
<body>

  	<h1>Application RANU</h1>

  	<label>Voici la liste de toutes les sociétés de type client: </label>
  	<br><br>
    <!--
      <pre>
        <?php //print_r($societes); ?>
      </pre> 
    -->
 	  <?php
	  	$compteur = 0;

	  	foreach ($societes as $key => $value) {
      //echo $value['id_societe'];
	  	$compteur++;
	  ?>

  		<p><?= $compteur.") "?><a href="detailsociete.php?id_societe=<?= $value['id_societe']?>"> <?= $value["nom_societe"]?> </a> </p>


  <?php } ?>

	<a href="../index.php"> <button type="button">Retour</button> </a>

</body>
</html>





