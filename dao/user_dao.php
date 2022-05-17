<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/textStyles.css">
  <link rel="stylesheet" href="css/images.css">
  <link rel="stylesheet" href="css/background.css">

  <title>Abiga&iacute;l Guzm&aacute;n</title>
  <link rel="icon" type="image/x-icon" href="./imgs/logo.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700;900&display=swap"
    rel="stylesheet">
</head>
<body>
  <?php
    require_once("./dao/dao.php");
    class user extends dao {
      public $id = 0;
      public $user = "";
      public $password = "";

      /*
      * Valida que el usuario y contraseña sean correctos
      */
      public function logIn($user, $password){
        $result = false;
        $conn = $this->open();
        if ($conn->connect_error){
          echo "Error de conexión a basa de datos" .$conn->connect_error;
        }else {
          //Se declará la consulta
          $query = "SELECT id, user, password FROM user WHERE user = '".$user."'";

          //Se ejecuta la consulta y se guarda en la variable myUsers
          $myUsers = $conn->query($query);

          //En caso de que el tamaño de los datos sea 0, significa que no hay usuarios resgistrados con ese nombre.
          if ($myUsers->num_rows<=0) {
            echo "<br>";
            echo "Este usuario no está registrado en la base de datos.";
          } else {
            //Si no hay error entonces en currentUser voy poniendo el renglon en donde se encuentra el username buscado.
            while($currentUser = $myUsers->fetch_assoc()){
              //Si es que la contraeña es igual a la variable que insertas, se ingresa exitosamente y regresa true. 
              if ($currentUser["password"] == $password) {
                $result = true;
                //echo "<br>";
                //echo "Has ingresado exitosamente.";
              } else {
                //Si la contraseña no es igual, no entra y regresa false. 
                //echo '<div class="alert alert-danger">El usuario o contraseña es incorrrecta*</div>';
                //include("login.html");
              }
            }
          }
        }
        $this->close();
        return $result;
      }

      public function getAll(){
        $conn = $this->open();
        if ($conn->connect_error){
          echo "Error de conexión a basa de datos" .$conn->connect_error;
        }else {
          //declaro la consulta a hacer
          $query = "SELECT id, name, email, number, service, note	FROM contact_list";
          //ejecuto la consulta y el resultado lo pongo en el nuevo arreglo de myUsers
          $myUsers = $conn->query($query);
          //en caso de que el tamaño de los datos sea 0 o menor marco error
          if ($myUsers->num_rows<=0) {
            echo '<table id="example" class="display table table-bordered">';
            echo '<thead>
                  <tr class="title-head">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                  </thead>
                <tbody class="img-button">
                </tbody>
                </table>';
          } else {
            echo '<table id="example" class="display table table-bordered">';
            echo '<thead>
                  <tr class="title-head">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                  </thead>
                <tbody class="img-button">';
            //si no hay error entonces en currentUser vpy poniendo cada uno de los renglones
            while($currentUser = $myUsers->fetch_assoc()){
              echo '<tr class="text-table">
                <th scope="row">'.$currentUser["id"].'</th>
                <td>'.$currentUser["name"].'</td>
                <td>'.$currentUser["email"].'</td>
                <td>'.$currentUser["number"].'</td>
                <td>'.$currentUser["service"].'</td>
                <td>'.$currentUser["note"].'</td>
                <td class="center">
                  <form method="post" action="./delete.php">
                    <button class="button-style-delete"  type="submit" name="deletetxt" value="'.$currentUser["id"].'">
                      <img src="./imgs/trash-can-solid.svg" alt="Eliminar">
                    </button>
                  </form>
              </td>
              </tr>';
            }
            echo '</tbody>
            </table>';
          }
        }
        $this->close(); 
      }

      public function getByService($service){
        $conn = $this->open();
        if ($conn->connect_error){
          echo "Error de conexión a basa de datos" .$conn->connect_error;
        }else {
          //declaro la consulta a hacer
          $query = "SELECT id, name, email, number, service, note	FROM contact_list WHERE service = '".$service."'";
          //ejecuto la consulta y el resultado lo pongo en el nuevo arreglo de myUsers
          $myUsers = $conn->query($query);
          //en caso de que el tamaño de los datos sea 0 o menor marco error
          if ($myUsers->num_rows<=0) {
            if ($service != "Todo"){
              echo '<table id="example" class="display table table-bordered">';
              echo '<thead>
                    <tr class="title-head">
                      <th scope="col">ID</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Teléfono</th>
                      <th scope="col">Servicio</th>
                      <th scope="col">Nota</th>
                      <th scope="col">Eliminar</th>
                    </tr>
                    </thead>
                  <tbody class="img-button">
                  </tbody>
                  </table>';
            } else {
              $service = new user;
              $service->getAll();
            }
            
          } else {
            echo '<table id="example" class="display table table-bordered">';
            echo '<thead>
                  <tr class="title-head">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                  </thead>
                <tbody class="img-button">';
            //si no hay error entonces en currentUser vpy poniendo cada uno de los renglones
            while($currentUser = $myUsers->fetch_assoc()){
              echo '<tr class="text-table">
                <th scope="row">'.$currentUser["id"].'</th>
                <td>'.$currentUser["name"].'</td>
                <td>'.$currentUser["email"].'</td>
                <td>'.$currentUser["number"].'</td>
                <td>'.$currentUser["service"].'</td>
                <td>'.$currentUser["note"].'</td>
                <td class="center">
                  <form method="post" action="./delete.php">
                    <button class="button-style-delete" type="submit" name="deletetxt" value="'.$currentUser["id"].'">
                      <img src="./imgs/trash-can-solid.svg" alt="Eliminar">
                    </button>
                  </form>
                </td>
              </tr>';
            }
            echo '</tbody>
            </table>';
          }
        }
        $this->close(); 
      }

      public function deleteContact($id){
        $result = false;
        $conn = $this->open();
          if ($conn->connect_error){
            echo "Error de conexión a basa de datos".$conn->connect_error;
          } else {
            //declaro la consulta a hacer
            $query = "DELETE FROM contact_list WHERE id = '".$id."'";
            //ejecuto la consulta y el resultado lo pongo en el nuevo arreglo de myUsers
            $myContact = $conn->query($query);	
            $result = true;
          }
        $this->close(); 
        return $result;	
      }
    }
  ?>
</body>
</html>