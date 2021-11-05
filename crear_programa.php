<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de programa</title>
    <link rel="stylesheet" href="registro.css">
    <link rel="icon" href="imagenes/11.png">
</head>
<body>

<nav class="navegacion">
    <li>   
       <button>
       <a href="index.php">Regresar</a>
       </button>  
       <button>
       <a href="crear_programa.php">Crear</a>
       </button>
       <button>
       <a href="consultar_programa.php">Consultar</a>
       </button>
       <button>
       <a href="modificar_programa.php">Modificar</a>
       </button>
       <button>
       <a href="borrar_programa.php">Borrar</a>
       </button>
    </li>
  </nav>

    <div id="div1" class="Seccion">
    <br> <br>
    <div id="div2">
     
    <?php session_start(); if (! empty($_SESSION['Tipo_usuario'])) { ?>
                  <img src="imagenes/11.png" width="200"> <?php} ?>

                  <div id="div3" Seccion>
                  <?php
                        if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                        
                  ?>
                                  <form id ="Formulario" role="form" method="post" action="guardado_programa.php">
                             <div class="col-md-12">
                                       <strong class="igris">Ingresa los datos del Programa </strong>
                            <br> <br>
                                
                                                                                                       
                                     <div class ="form-row">                                   
                                     <div class="form-group col-md-6">
                                     <label class="igris">N° de Programa:</label> 
                                     <input class="form-control input-lg" type="number" name="id" min="9999" max="99999999999999" value="" placeholder="IDENTIFICACION" required/> <br>
                                 
                         </div>
                         </div>
                                 
                                     <label class="igris">Nombre:</label> 
                                     <input class="form-control" style ="text-transform: uppercase;" type="text" name="nombre" value ="" placeholder ="Nombre" required/> <br>
                                      
                                    <label>Tipo:</label>          
                                    <input class="form-control" style="text-transform: uppercase;" type="text" name="tipo" value ="" placeholder ="Tipo programa" required> <br>                                                       
                                    
                                     <input class="btn btn-primary" type="submit" value="Guardar">                              
                 </div>
                </form>   
                <?php
                 }
                else
                {
                    echo "No tiene permisos para realizar esta accion";
                }               
                ?>
                <br>
            </div>
        </div>
    </div>    
</body>
</html>