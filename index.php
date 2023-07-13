<!DOCTYPE html>
<html >

<head>
   <title>BA CONF</title>
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

      <div class="imagen-fondo">
        <div class="fondo">
          <h1> Conf Bs As</h1>
          <p> Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos
            que están creando el futuro de internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti.
            ¡Te esperamos!
          </p>
        <div class="botones">
          <a href="#oradores" > <div id="boton1">Quiero ser Orador</div></a>
          <a href="./comprar.php"> <div id="boton2"> Comprar Tickets </div></a>
        </div>
      </div>
    </div>
    </header>
     
    
    <main> 
      <h3 style="text-align: center; margin-top: 20px;"> <span style="font-size: 14px;"> CONOCE A LOS </span> <br>ORADORES</h3>
      <div class="oradores">
        <div class="card" >
          <img src="img/steve.jpg" class="card-img-top" alt="Steve" style="width: 285px; height: 285px;">
         <div> 
            <div class="etiqueta">
              <span class="badge text-bg-warning">JavaScript</span>
              <span class="badge text-bg-primary">React</span>
            </div>
            <h3 class="nombres">Steve Jobs</h3>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus eligendi aliquid sunt totam cumque? Dolorem ullam ipsam quod aut, perferendis, quae unde iure recusandae sequi, illo deserunt exercitationem culpa ut.</p>
            </div>
         </div>
        </div>

        <div class="card" >
          <img src="img/bill.jpg" class="card-img-top" alt="Bill" style="width: 285px; height: 285px;">
          <div> 
            <div class="etiqueta">
              <span class="badge text-bg-warning">JavaScript</span>
              <span class="badge text-bg-primary">React</span>
            </div>
            <h3 class="nombres">Bill Gates</h3>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut sit exercitationem iure temporibus, incidunt repellat fugiat ad facere voluptate quaerat quo. Quae id quos, numquam a tempore nam ab..</p>
            </div>
          </div>
        </div>

        <div class="card"  >
          <img src="img/ada.jpeg" class="card-img-top" alt="Ada" style="width: 285px; height: 285px;">
          <div>
            <div class="etiqueta">
              <span class="badge text-bg-secondary">Negocios</span>
              <span class="badge text-bg-danger">Startups</span>
            </div>
            <h3 class="nombres">Ada Lovalace</h3>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente excepturi commodi atque magni tenetur nobis dolore quas dolor consequuntur modi labore molestiae enim repellat, perferendis esse repellendus</p>
            </div>
          </div>
        </div>

      </div>
      <div class="ubicacion">
        <img src="img/honolulu.jpg" class="imagen-hono">
        <div class="otro-div">
          <h2>Bs As - Octubre</h2>
          <p>Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos. Honolulu es la 
            más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana
            en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad - condado consolidada que cubre toda
            la ciudad (aproximadamente 600 km2 de superficie).
          </p>
          <a href="#"><div id="boton3">Conocé Más</div></a>
        </div>
      </div>

      <div>
        <h3 style="text-align: center; margin-top: 20px;"><span style="font-size: 14px;"> CONVIÉRTE EN UN</span><br> ORADOR</h3>
        <div>
          <p class="se-orador">Anótate como orador para dar una <span style="text-decoration: underline dotted;">charla ignite</span>. ¡Cuéntanos de qué quiere hablar!</p>
        </div>
        
        <div class="formulario">
          
          <div >
            <form   id="oradores" action="registro-dos.php" method="post">
              <input type="text" class="reg" placeholder="Nombre" name="nombre">
              <input type="text" class="reg" placeholder="Apellido" name="apellido"> 
              <textarea placeholder="¿Sobre qué quieres hablar?" name="explicacion"> </textarea> <br>
              <p class="palabras" style="color: rgb(129, 129, 129);" >Recuerda incluir un titulo para tu charla</p>
              <input type="submit" class="botonR" value="Enviar">
            </form>
          </div>
        </div>

      </div>
     
    <?php include './include/template/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

<script src="script.js"></script>
</html>