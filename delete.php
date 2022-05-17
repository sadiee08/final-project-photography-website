<?php 
  //se manda hablar el user_dao, para sacar las funciones.
  require_once("./dao/user_dao.php");
  $myUser = new user();
  $delete = $_POST['deletetxt'];

  if ($myUser->deleteContact($delete)){
    header("Location: crud.php");
  }
    
?>