<?php
include_once('envio.php');
if($_POST){
  $titulo= isset( $_GET['titulo'] ) ? $_GET['titulo'] : 0;
  $texto= isset( $_GET['texto'] ) ? $_GET['texto'] : 0;
  $correo= isset( $_POST['correo'] ) ? $_POST['correo'] : 0;
  $nombre= isset( $_POST['nombre'] ) ? $_POST['nombre'] : 0;
  enviar($titulo,$texto,$correo,$nombre);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">            
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="libreria/particles.js-master/particles.min.js"></script>
    <title>Mis Notas</title>
</head>
<body>
<div id="particles-js"></div>    <!--Particles -->    
    <!--Side var-->
    <ul class="nav flex-column">
        <li class="nav-item navlogo">
            <a href="index.php">
                <img class="logo-img" src="img/logo.png" alt="Logo" href="index.php"> NotePad
            </a>                        
        </li>
        <li class="nav-item first">
          <a class="nav-link active" aria-current="page" href="nueva.php">Nueva Nota</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="enviar.php">Enviar Nota</a>
        </li>        
      </ul>
    <!--Fin Side Var-->
  <div class="container comentarios">
        <form method="post">
        <div class="row" style="padding-top: 150px;">
          <div class="col-6">
            <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="correo"/>          
            <label for="floatingInput">Correo Electronico</label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="nombre"/>          
            <label for="floatingInput">Nombre</label>
            </div>
          </div>
        </div>        
        <button class="cta" type="submit">
          <span class="hover-underline-animation"  > Enviar Correo Electronico </span>
          <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
            <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
          </svg>
        </button>              
        </form> 
      </div>
      <script src="js/particles.js"></script> 
</body>
</html>