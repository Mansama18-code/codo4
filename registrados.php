<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<<<<<<< HEAD
    <title>REGISTRADOS A BA CONF</title>
=======
    <title>Lista de Personas Registradas</title>
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/codoacodo.png">
</head>

<body>

    <?php
<<<<<<< HEAD
    
    
    require_once('./include/config/conexiondb.php');    
    
    // LOOP TILL END OF DATA
=======

    // LOOP TILL END OF DATA
    $conexion = mysqli_connect("localhost","root","","buenosairesconf");
    
    if (mysqli_connect_errno()) {

        echo "error de conexión";

    } else {

        echo "WELCOME FRIEND <br><br>";

    }
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4

    $query = "SELECT * from registro";

    $result = mysqli_query($conexion,$query);

    ?>
<<<<<<< HEAD
    <div class="tabla-inscriptos" style="overflow-x:auto;">
    <div style="text-align: center;"> PERSONAS INSCRIPTAS </div>
        <table class="table table-bordered text-center" >
=======
    <div class="tabla-inscriptos">
        <table class="table table-bordered text-center">
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4
            <thead>
            <tr class="bg-dark text-white">
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Categoria</th>
<<<<<<< HEAD
                
=======
                <th scope="col">Total</th>
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4
            </tr>
            </thead>

            <tbody>
                <?php
                    while($rows= mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['nombre'];?></td>
                    <td><?php echo $rows['apellido'];?></td>
                    <td><?php echo $rows['correo'];?></td>
                    <td><?php echo $rows['cantidad'];?></td>
                    <td><?php echo $rows['categoria'];?></td>
<<<<<<< HEAD
                   
=======
                    <td><?php echo $rows['total'];?></td>
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4
                </tr>
                <?php
                    }
                ?>
            
            </tbody>
        </table>

    </div>
<<<<<<< HEAD
    <div class="salir">
        <a href="./sesion.php">CERRAR SESION</a>
    </div>

    
=======
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4
</body>
</html>