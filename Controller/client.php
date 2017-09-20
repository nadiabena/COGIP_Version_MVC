<?php

  if(isset($_GET['nom_societe'])){
      $nom_societe = $_GET['nom_societe'];
  }
  require_once '../Model/client.php';  
  require_once '../View/client.php';

?>
