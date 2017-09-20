<?php

  if(isset($_GET['numero_facture'])){
  	$numero_facture = $_GET['numero_facture'];
  }
  
  require_once '../Model/detailfacture.php';
  require_once '../View/detailfacture.php';

?>
