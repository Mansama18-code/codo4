<?php 

    require_once('./include/config/conexiondb.php');    

    var_dump($_POST);
   

    //Obtener data
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $explicacion = $_POST ['explicacion'];
<<<<<<< HEAD
    $submit = $_POST['enviar'];
=======
>>>>>>> 09e5c9801306345ed0256dfe0a3c2219ba86fe93
   
    

    echo $nombre;
    echo $apellido;
    echo $explicacion;
<<<<<<< HEAD
    echo $submit;
=======
>>>>>>> 09e5c9801306345ed0256dfe0a3c2219ba86fe93
    


    
    //Inserta de datos a la base.
<<<<<<< HEAD
  
    if (empty($nombre)){
        
        if (empty($apellido)){

         
                
                 
                 header ('refresh: 2, url=index.php');
                 echo "<h2>CAMPOS VACIOS</h2>";
           
        }
        
        

   }else {
            $insertar_SQL = "INSERT INTO orador (nombre, apellido, explicacion)
            VALUES ('$nombre', '$apellido', '$explicacion')";

        $insertarPhp = mysqli_query($conexion, $insertar_SQL);


        if($insertarPhp){

        
        header ('refresh: 2, url=registro-orador.php');
        echo "¡LA BASE DE DATOS DE LA CONF ORADOR, HA SIDO ACTUALIZADA!";

        } else {

            echo "¡NO SE INGRESAR LOS DATOS A LA BASE DE DATOS!";

        }

   }
  
   
=======
    $insertar_SQL = "INSERT INTO orador (nombre, apellido, explicacion)
                        VALUES ('$nombre', '$apellido', '$explicacion')";
                
    
   $insertarPhp = mysqli_query($conexion, $insertar_SQL);
    
   
    if($insertarPhp){

        echo "¡LA BASE DE DATOS DE LA CONF ORADOR, HA SIDO ACTUALIZADA!";
        header ('refresh: 2, url=registro-orador.php');

    } else {

        echo "¡NO SE INGRESAR LOS DATOS A LA BASE DE DATOS!";

    }
>>>>>>> 09e5c9801306345ed0256dfe0a3c2219ba86fe93

 
?>