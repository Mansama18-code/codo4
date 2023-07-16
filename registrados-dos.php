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
    $query2 = "SELECT * from orador";

    $result = mysqli_query($conexion,$query);
    $result2 = mysqli_query($conexion,$query2);

    ?>
    <div class="tabla-inscriptos" style="overflow-x:auto;">
    <div style="text-align: center;"> PERSONAS INSCRIPTAS </div>
        <table class="table table-bordered text-center">
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

    <div class="tabla-inscriptos" style="overflow-x:auto;">
        <div style="text-align: center;"> ORADORES INSCRIPTOS </div>
        <table class="table table-bordered text-center">
            <thead>
            <tr class="bg-dark text-white">
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Explicación</th>
                
                
            </tr>
            </thead>

            <tbody>
                <?php
                    while($rows= mysqli_fetch_assoc($result2))
                    {
                ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['nombre'];?></td>
                    <td><?php echo $rows['apellido'];?></td>
                    <td><?php echo $rows['explicacion'];?></td>
                    
                   
                </tr>
                <?php
                    }
                ?>
            
            </tbody>
        </table>

    </div>
    <div class="formulario">
        <div class="forma" >
                <form  id="myForm2" action="borrar-orador.php" method="post">
                <input type="text" class="reg" placeholder="Nombre" name="nombre" id="nombre-form">
                <input type="text" class="reg" placeholder="Apellido" name="apellido" id="apellido-form"> 
                
                <input type="submit"  class="botonR" value="BORRAR ORADOR">
                </form>
            </div>
    </div>
    <div class="formulario">
        <div class="forma" >
                <form  id="myForm3" action="editar-orador.php" method="post">
                <input type="text" class="reg" placeholder="Nombre" name="nombre" id="nombre-form">
                <input type="text" class="reg" placeholder="Apellido a corregir" name="apellido" id="apellido-form"> 
                
                <input type="submit"  class="botonR" value="EDITAR ORADOR">
                </form>
            </div>
    </div>
        <div class="salir">
            <a href="./sesion.php">CERRAR SESION</a>
        </div>
    
        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>