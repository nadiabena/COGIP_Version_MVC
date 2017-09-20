<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Facturation</title>
</head>
<body>

  <h1>Application RANU</h1>

  <label>Voici les détails du contact: </label><?php echo "<strong>".$personnes[0]["nom_personne"]." ".$personnes[0]["prenom_personne"]."</strong>";?>
  <br><br>
  <label>Email:</label>	<?= $personnes[0]["email_personne"];?> <br/>
  <label>Numéro de téléphone:</label> <?= $personnes[0]["tel_personne"];?> <br/>
  <label>Travaille pour la société: </label> <?= $personnes[0]["nom_societe"];?> siégeant à <?= $personnes[0]["adresse_societe"];?> <br/>
  <label>Voici la liste des factures qui lui sont liées:</label>
   <?php
      if (sizeof($liste_factures) == 0) {
        echo "<br/> <strong><i>Il n'y a actuellement aucune facture..</i></strong><br/>";
      }else{
        $compteur = 0;
        foreach ($liste_factures as $key => $value) {
        $compteur++;
      ?>
        <p><?= $compteur.") "?> <a href="detailfacture.php?numero_facture=<?=$value["id_facture"]?>"> <?= $value["numero_facture"]?> </a> </p>
   <?php } } ?>

  <br/>  
  <a href="../Controller/annuaire.php"> <button type="button">Retour</button> </a>

</body>
</html>


