<?php 

    require_once('./include/config/conexiondb.php');    

 
   

    //Obtener data
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    echo $nombre;
    echo $apellido;
    
    //Inserta de datos a la base.
  
    if (empty($nombre) && empty($apellido)){
        
      
                 header ('refresh: 2, url=registrados-dos.php');
                 echo "<h2>CAMPOS VACIOS</h2>";
           
        }
        
        

   else {
        $cambiar_SQL = "UPDATE orador SET apellido = '$apellido' WHERE nombre = '$nombre'";

        $cambiarPhp = mysqli_query($conexion, $cambiar_SQL);


        if($cambiarPhp){

        
        header ('refresh: 2, url=registrados-dos.php');
        echo "¡LA BASE DE DATOS DE LA CONF ORADOR, HA SIDO ACTUALIZADA!";

        } else {

            echo "¡NO SE PUEDEN ACTUALIZAR LOS DATOS A LA BASE DE DATOS!";

        }

   }


    
    
  
   

 
?>