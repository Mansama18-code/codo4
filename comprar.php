<!DOCTYPE html>
<html >

<head>
   <title>COMPRAR TICKETS</title>
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
      <br>
      <div class="comprarTicket" id="ticket">
        <div class="estudiante">
          <p style="font-weight: bold; font-size: larger;">Estudiante</p>
          <p>Tiene un descuento</p>
          <p style="font-weight: bold; font-size: larger;">80%</p>
          <p style="color: rgb(152, 152, 152); font-size: small;">*Presentar Documentación</p>
        </div>

        <div class="trainne">
          <p style="font-weight: bold; font-size: larger;">Trainne</p>
          <p>Tiene un descuento</p>
          <p style="font-weight: bold; font-size: larger;">50%</p>
          <p style="color: rgb(152, 152, 152); font-size: small;">*Presentar Documentación</p>
        </div>

        <div class="junior">
          <p style="font-weight: bold; font-size: larger;">Junior</p>
          <p>Tiene un descuento</p>
          <p style="font-weight: bold; font-size: larger;">15%</p>
          <p style="color: rgb(152, 152, 152); font-size: small;">*Presentar Documentación</p>
        </div>

      </div>
      <br>
      <div class="venta" style="text-align: center;">
        <p >Venta</p>            
        <p style="font-size: xx-large;">VALOR DEL TICKET $200</p>
      </div>

      <div class="formulario">
        <div class="forma" >
            <form  id="myForm" action="registro.php" method="post">
              <input type="text" class="reg" placeholder="Nombre" name="nombre" id="nombre-form">
              
              <input type="text" class="reg" placeholder="Apellido" name="apellido" id="apellido-form"> 
              <input type="text" class="reg" placeholder="Correo" name="correo" id="celectro">
              
              <br><br>
              <label class="nombres-texto">Cantidad</label>
              <label class="nombres-texto">Categoria</label>
              
              <input type="number" placeholder="Cantidad" name="cantidad" id="cuantos"> 
              
             
              <select class="seleccion" name="categoria" id="selecto">
                <option value="Estudiante">Estudiante</option>
                <option value="Trainne">Trainne</option>
                <option value="Junior">Junior</option>
              </select>

              <label class="nombres-texto" id="obligatorio">*Campos Obligatorios</label>
              <br><br>
             
              <label class="totalaPagar">  Total a Pagar: $ <span id="resumende"></span> </label>
              <br>
              <input type="button" onclick= "borrar()" id ="button2" value="Borrar">
              <input type="button" onclick= "resumen()" id ="button2" value="Resumen">
              
              <input type="submit"  class="botonR" value="INSCRIBIRME">
            </form>
          </div>
      </div>

      <?php include './include/template/footer.php'; ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  
  <script src="script.js"></script>
</html>