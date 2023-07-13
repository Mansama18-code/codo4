<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>REGISTRADOS A BA CONF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/codoacodo.png">
</head>

<body>

    <?php
    
    
    require_once('./include/config/conexiondb.php');    
    
    // LOOP TILL END OF DATA

    $query = "SELECT * from registro";

    $result = mysqli_query($conexion,$query);

    ?>
    <div class="tabla-inscriptos" style="overflow-x:auto;">
    <div style="text-align: center;"> PERSONAS INSCRIPTAS </div>
        <table class="table table-bordered text-center" >
            <thead>
            <tr class="bg-dark text-white">
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Categoria</th>
                
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
                   
                </tr>
                <?php
                    }
                ?>
            
            </tbody>
        </table>

    </div>
    <div class="salir">
        <a href="./sesion.php">CERRAR SESION</a>
    </div>

    
</body>
</html>