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
      <main>
        <div class="diseno">
            <div class="diseno-form">
                <form action="inscribidos.php" method="post"> 
                    <label class="formula">Email or User:</label>
                    <input type="text" class="formato2" id="usuario" name="nombre"> 
                    <label class="formula">Contraseña:</label>    
                    <input type="password" class="formato2" id="contrasena" name="passwor"> 
                    <label class="formula" id="error"></label>    
                    <input type="submit" class="botonLogin"  value="INICIAR SESION"> 
    
                </form>
            </div>
        </div>

      </main>


      <?php include './include/template/footer.php'; ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  
  <script src="script.js"></script>
</html>