<?php 
  //se manda hablar el user_dao, para sacar las funciones.
  require_once("./dao/user_dao.php");
  $myUser = new user();
  $user = $_POST['txtuser'];
  $password = $_POST['txtpassword'];

  if($myUser->logIn($user, $password) == true){
    header("Location: crud.php");
  } else {
    echo '<div class="alert alert-danger">El usuario o contraseña es incorrrecta*</div>';
    include("login.html");
  }       
?>
