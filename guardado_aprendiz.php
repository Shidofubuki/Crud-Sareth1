<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Modificar.css">
    <link rel="icon" href="imagenes/11.png">
</head>
<body>
<?php
include('Funciones.php');
$vtipoid=$_POST ['tipoid'];
$vnumid=$_POST['numid'];
$vnombres=$_POST['nombres'];
$vapellidos=$_POST['apellidos'];
$vdireccion=$_POST['direccion'];
$vtelefono=$_POST['telefono'];
$vficha=$_POST['ficha'];

$miconexion=conectar_bd ('','sena_bd');
$resultado=consulta ($miconexion, "insert into aprendices (apre_tipoid, apre_numid, apre_nombres, apre_apellidos, apre_direccion, apre_telefono, apre_ficha) values ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}', '{$vtelefono}','{$vficha}')");
 
if ($resultado)
   {
     
       echo "Guardado exitoso";
   }
  
?>
<nav class="navegacion">
    <li>
       <button>
       <a href="index.php">Regresar</a>
       </button>   
       <button>
       <a href="registro_aprendiz.php">Crear</a>
       </button>
       <button>
       <a href="consulta_aprendiz.php">Consultar</a>
       </button>
       <button>
       <a href="modificar_aprendiz.php">Modificar</a>
       </button>
       <button>
       <a href="borrar_aprendiz.php">Borrar</a>
       </button>
    </li>
  </nav>

</body>