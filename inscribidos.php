<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 09e5c9801306345ed0256dfe0a3c2219ba86fe93
<!DOCTYPE html>
<html >

<head>
   <title>INICIAR SESION</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="normalize.css">
   <script src="https://kit.fontawesome.com/7575dda8d9.js" crossorigin="anonymous"></script>
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Rubik+Pixels&display=swap');
  </style>
    <link rel="icon" type="image/x-icon" href="img/codoacodo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <header>
        <?php include './include/template/nav.php'; ?>

    </header>

        <div class="centrar-texto">
            <?php

                $user = "manuel@baires.com";
                $passUser = "codoacodo1";

                $admin = "admin@baires.com";
                $passAdm = "codoacodo2";
        


                if($_POST['nombre'] == $user && $_POST['passwor'] == $passUser) {

                    require_once("registrados.php");

                } elseif($_POST['nombre'] == $admin && $_POST['passwor'] == $passAdm) { 
                    
                     

                        require_once("registrados-dos.php");
    
                    }else {
                    echo "<h2> Error de ingreso </h2>";
            ?> 
         
            <br> <input type="button" onclick="document.location.href='sesion.php';" value="VOLVER" name="button" class="botonR">
        
            <?php
            }
            ?> 
        
        </div> 
        
       
           
           
       

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <?php include './include/template/footer.php'; ?> 
    </body>

    <script src="script.js"></script>
<<<<<<< HEAD
</html> 
=======
</html> 
=======
<?php

    $admin = "manuel@baires.com";
    $passAdm = "codoacodo1";

    


        if($_POST['nombre'] == $admin && $_POST['passwor'] == $passAdm) {

            require_once("registrados.php");

        }  else { 

            echo "<h2> Error de ingreso </h2>";
?> 
            
            <br> <input type="button" onclick="document.location.href='index.html';" value="Back" name="button" class="btn">
    
<?php

        }


    



?>
>>>>>>> fbced1760857449d47f68ca31b175dbcea50abe4
>>>>>>> 09e5c9801306345ed0256dfe0a3c2219ba86fe93
