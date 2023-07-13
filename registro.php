<?php 

    require_once('./include/config/conexiondb.php');    

    var_dump($_POST);
   

    //Obtener data
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST ['correo'];
    $cantidad = $_POST ['cantidad'];
    $categoria = $_POST ['categoria'];
    

    echo $nombre;
    echo $apellido;
    echo $correo;
    echo $cantidad;
    echo $categoria;


    
    //Inserta de datos a la base.
    $insertar_SQL = "INSERT INTO registro (nombre, apellido, correo, cantidad, categoria)
                        VALUES ('$nombre', '$apellido', '$correo', '$cantidad', '$categoria')";
                
    
   $insertarPhp = mysqli_query($conexion, $insertar_SQL);
    
   
    if($insertarPhp){

        echo "¡LA BASE DE DATOS DE LA CONF, HA SIDO ACTUALIZADA!";
        header ('refresh: 2, url=inscripto.php');

    } else {

        echo "¡NO SE INGRESAR LOS DATOS A LA BASE DE DATOS!";

    }

 
?>