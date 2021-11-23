<?php
include_once('php/conexion.php');
$offset=6*60*60;
if( $_POST )
{
  header('Location:index.php');
  $numero=isset( $_GET['numero'] ) ? $_GET['numero'] : '';
  $titulo=isset( $_POST['titulo'] ) ? $_POST['titulo'] : '';
  $texto=isset( $_POST['texto'] ) ? $_POST['texto'] : '';
  $fecha=date('Y/m/d h:i:s a', time()-$offset);
  actualizar($numero,$titulo,$texto,$fecha);
  die();
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
    <title>Mis Notas</title>
</head>
<body>    
    <!--Side var-->
    <ul class="nav flex-column">
        <li class="nav-item navlogo">
            <a href="index.php">
                <img class="logo-img" src="img/logo.png" alt="Logo" > NotePad
            </a>            
        </li>
        <li class="nav-item first">
          <a class="nav-link active" aria-current="page" href="nueva.php">Nueva Nota</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="enviar.php">Enviar Nota</a>
        </li>        
      </ul>
              <!--Fin de Side Var-->
              <div class="container comentarios">

<form method="post">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="titulo"/>          
  <label for="floatingInput">Titulo</label>
</div>
<div class="form-floating">
  <input class="form-control" name="texto" id="floatingTextarea2" style="height: 100px"/>
  <label for="floatingTextarea2">Texto</label>
</div>
<button class="cta" type="submit">
  <span class="hover-underline-animation"> Editar nota </span>
  <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
    <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
  </svg>
</button>              
</form> 
</div>      
</body>
</html>