<?php 

    require_once('./include/config/conexiondb.php');    

    var_dump($_POST);
   

    //Obtener data
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $explicacion = $_POST ['explicacion'];
    $submit = $_POST['enviar'];
   
    

    echo $nombre;
    echo $apellido;
    echo $explicacion;
    echo $submit;
    


    
    //Inserta de datos a la base.
  
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
  
   

 
?>