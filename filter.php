<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

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
    <link rel="stylesheet" href="css/media.css">
    <script src="./js/nav.js" defer></script>

    <title>Abiga&iacute;l Guzm&aacute;n</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700;900&display=swap"
      rel="stylesheet">

  </head>
  <body>
    <nav class="menuSup navbar">
      <button class="mob-nav-toogle" aria-controls="primary-navigation" aria-expanded="false"><span
        class="sr-only"></span></button>
      <div>
        <img src="./imgs/Imagen1.png" alt="Abiga&iacute;l Guzm&aacute;n" id="menuImgRes">
      </div>
      <div>
        <ul id="primary-navigation" data-visible="false" class="nav justify-content-center primary-navigation">
          <li class="nav-item">
            <a class="nav-link middleMenu" aria-current="page" href="inicio.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link middleMenu" href="galeria.html">Galer&iacute;a</a>
          </li>
          <li class="nav-item">
            <a class="nav-link middleMenu" href="servicios.html">Servicios</a>
          </li>
          <li class="nav-item" id="imgLogoHidden">
            <a class="nav-link menuSupImg" href="inicio.html"><img src="./imgs/Imagen1.png"
                alt="Abiga&iacute;l Guzm&aacute;n" id="menuSupImg"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link middleMenu" href="sobre_mi.html">Sobre m&iacute;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link middleMenu" href="contacto.html">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link middleMenu" href="login.html">Ingresar</a>
          </li>
        </ul>
      </div>
    </nav>
  <div id="namePageIngresar">
    <h1>Listado de contacto</h1>
  </div>
  <div class="crud-margin">
    <form method="post" name="filter" action="filter.php">
      <div class="img-button img-button-filter">
        <button class="dropdown-toggle button-style-filtro" type="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          <img src="./imgs/filter-solid.svg" alt="Filtro">Filtrar
        </button>
        <ul class="dropdown-menu font-style-filter">
          <li><button class="dropdown-item" type="submit" value="Evento" name="servicio">Por Eventos</button></li>
          <li><button class="dropdown-item" type="submit" value="Tramite" name="servicio">Por Tramite</button></li>
          <li><button class="dropdown-item" type="submit" value="Producto" name="servicio">Por Producto</button></li>
          <li><button class="dropdown-item" type="submit" value="Casual" name="servicio">Por Casual</button></li>
          <li><button class="dropdown-item" type="submit" value="Todo" name="servicio">Todos</button></li>
        </ul>
      </div>
    </form>
    <?php 
      //se manda hablar el user_dao, para sacar las funciones.
      require_once("./dao/user_dao.php");
      $myFilter = new user();
      $service = $_POST['servicio'];
      if ($service != "Todo"){
        $myFilter->getByService($service);
      } else {
        $myFilter->getAll();  
      }
    ?>
  </div>	
  </body>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "ordering":  false,
        "paging": false,
        "searching": false,
        "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
      });
    });
  </script>
  <footer class="imgInfLogo footerGen">
    <img src="./imgs/imgInf.png" alt="Abiga&iacute;l Guzm&aacute;n">
  </footer>
</html>

