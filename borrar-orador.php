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
        $eliminar_SQL = "DELETE FROM orador WHERE nombre = '$nombre' and apellido = '$apellido'";

        $eliminarPhp = mysqli_query($conexion, $eliminar_SQL);


        if($eliminarPhp){

        
        header ('refresh: 2, url=registrados-dos.php');
        echo "¡LA BASE DE DATOS DE LA CONF ORADOR, HA SIDO ACTUALIZADA!";

        } else {

            echo "¡NO SE PUEDEN BORRAR LOS DATOS A LA BASE DE DATOS!";

        }

   }


    
    
  
   

 
?>