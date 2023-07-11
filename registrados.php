<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Personas Registradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/codoacodo.png">
</head>

<body>

    <?php

    // LOOP TILL END OF DATA
    $conexion = mysqli_connect("localhost","root","","buenosairesconf");
    
    if (mysqli_connect_errno()) {

        echo "error de conexión";

    } else {

        echo "WELCOME FRIEND <br><br>";

    }

    $query = "SELECT * from registro";

    $result = mysqli_query($conexion,$query);

    ?>
    <div class="tabla-inscriptos">
        <table class="table table-bordered text-center">
            <thead>
            <tr class="bg-dark text-white">
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Categoria</th>
                <th scope="col">Total</th>
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
                    <td><?php echo $rows['total'];?></td>
                </tr>
                <?php
                    }
                ?>
            
            </tbody>
        </table>

    </div>
</body>
</html>