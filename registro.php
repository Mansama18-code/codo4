<?php 
<<<<<<< HEAD

    require_once('./include/config/conexiondb.php');    

    var_dump($_POST);
   

=======
    var_dump($_POST);
    
    //conexión a Base de Datos
    $conexion = mysqli_connect("localhost","root","","buenosairesconf");
    
    if (mysqli_connect_errno()) {

        echo "error de conexión";

    } else {

        echo "WELCOME FRIEND <br><br>";

    }
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4
    //Obtener data
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST ['correo'];
    $cantidad = $_POST ['cantidad'];
    $categoria = $_POST ['categoria'];
<<<<<<< HEAD
    
=======
    $total = 500;
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4

    echo $nombre;
    echo $apellido;
    echo $correo;
    echo $cantidad;
    echo $categoria;
<<<<<<< HEAD


    
    //Inserta de datos a la base.
    $insertar_SQL = "INSERT INTO registro (nombre, apellido, correo, cantidad, categoria)
                        VALUES ('$nombre', '$apellido', '$correo', '$cantidad', '$categoria')";
                
    
   $insertarPhp = mysqli_query($conexion, $insertar_SQL);
    
   
    if($insertarPhp){

        echo "¡LA BASE DE DATOS DE LA CONF, HA SIDO ACTUALIZADA!";
        header ('refresh: 2, url=inscripto.php');

    } else {

        echo "¡NO SE INGRESAR LOS DATOS A LA BASE DE DATOS!";

=======
    echo $total;

    
    //Inserta de datos a la base.

   $insertar_data = "INSERT INTO registro(nombre,apellido,correo,cantidad,categoria,total) VALUES 
   ('$nombre','$apellido','$correo','$cantidad','$categoria','$total')";             
    
   $insertarPhp = mysqli_query($conexion,$insertar_data);
    
   
    if($insertar_data){

        echo "funciona";
        header ('refresh: 5, url=inscripto.html');

    } else {

        echo "nNoPp";
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4
    }

 
?>