<?php 

    require_once('./include/config/conexiondb.php');    

    var_dump($_POST);
   

    //Obtener data
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $explicacion = $_POST ['explicacion'];
   
    

    echo $nombre;
    echo $apellido;
    echo $explicacion;
    


    
    //Inserta de datos a la base.
    $insertar_SQL = "INSERT INTO orador (nombre, apellido, explicacion)
                        VALUES ('$nombre', '$apellido', '$explicacion')";
                
    
   $insertarPhp = mysqli_query($conexion, $insertar_SQL);
    
   
    if($insertarPhp){

        echo "¡LA BASE DE DATOS DE LA CONF ORADOR, HA SIDO ACTUALIZADA!";
        header ('refresh: 2, url=registro-orador.php');

    } else {

        echo "¡NO SE INGRESAR LOS DATOS A LA BASE DE DATOS!";

    }

 
?>