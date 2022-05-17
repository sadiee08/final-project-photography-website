<?php 
  //se manda hablar el user_dao, para sacar las funciones.
  require_once("./dao/contact_list_dao.php");
  $myContact = new contact();
  $name = $_POST['nametxt'];
  $email = $_POST['emailtxt'];
  $number = $_POST['numbertxt'];
  $service = $_POST['servicetxt'];		
  $note = $_POST['notetxt'];

  //Me quede tratando de arrglar que me apareciera en la misma pagina.
  if ($myContact->addContact($name, $email, $number, $service, $note)){
    echo '<div class="alert alert-success">¡Se envio correctamente!</div>';
    include("contacto.html");
  }

?>