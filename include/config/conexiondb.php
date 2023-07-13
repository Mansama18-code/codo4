<?php
    
    //conexión a Base de Datos
    $conexion = mysqli_connect("localhost","root","","buenosairesconf");
    
    if (mysqli_connect_errno()) {

        echo "¡LA BASE DE DATOS NO FUNCIONA! <br><br>";

    } else {

        echo "¡LA BASE DE DATOS ESTÁ CONECTADA! <br><br>";

    }

?>