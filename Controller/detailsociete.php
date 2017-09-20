<?php


  if(isset($_GET['nom_societe'])){
	$nom_societe = $_GET['nom_societe'];
  }

  require_once '../Model/detailsociete.php';
  require_once '../View/detailsociete.php';


?>
