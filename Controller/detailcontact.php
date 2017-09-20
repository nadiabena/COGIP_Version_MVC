<?php

  if(isset($nom_personne)){
      $nom_personne = $_GET['nom_personne'];
  }

  require_once '../Model/detailcontact.php';
  require_once '../View/detailcontact.php'; 
 
?>
