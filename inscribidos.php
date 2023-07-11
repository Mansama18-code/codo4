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
