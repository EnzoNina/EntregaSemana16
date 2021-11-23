<?php
include_once('php/conexion.php');
$result = run_query();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">            
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4fce5b49d2.js" crossorigin="anonymous"></script>
    <script src="libreria/particles.js-master/particles.min.js"></script>
    <title>Mis Notas</title>
</head>
<body>
    <div id="particles-js"></div>    <!--Particles -->
    <!--Side var-->
    <ul class="nav flex-column">
        <li class="nav-item navlogo">
            <a href="index.php">
                <img class="logo-img" src="img/logo.png" alt="Logo"> NotePad
            </a>            
        </li>
        <li class="nav-item first">
          <a class="nav-link active" aria-current="page" href="nueva.php">Nueva Nota</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="enviar.php">Enviar Nota</a>
        </li>        
      </ul>
      <!-- Tabla con todas las notas-->
      <div class="container-fluid allnotes">
        <table>
          <thead>
            <tr>
              <th style="width:60px">Numero</th>
              <th style="width:120px">Titulo</th>
              <th style="width:500px">Texto</th>
              <th class="fecha">Fecha y Hora</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($user=$result->fetch_assoc()){
              ?>
              <tr>
                <td><?php echo $user['numero'] ?></td>
                <td><?php echo $user['titulo'] ?></td>
                <td><?php echo $user['texto'] ?></td>
                <td><?php echo $user['fecha'] ?></td>
                <td>
                  <a href="borrar.php?numero=<?php echo $user['numero']; ?>">
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="editar.php?numero=<?php echo $user['numero'];?>">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="enviar.php?titulo=<?php echo $user['titulo'];?>&texto=<?php echo $user['texto']; ?>">                  
                  <i class="fas fa-paper-plane"></i>
                  </a>                
                </td>
              </tr>
              <?php
            }      
            ?>    
          </tbody>
        </table>        
      </div>
      <script src="js/particles.js"></script>
</body>
</html>