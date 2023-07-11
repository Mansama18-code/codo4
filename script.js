function borrar() {
    document.getElementById("myForm").reset();
}

function verificar() {
    /* Nombre */
    var resp = false;

    if (document.getElementById("nombre-form").value == "" && document.getElementById("apellido-form").value == "" && document.getElementById("celectro").value == "" && document.getElementById("cuantos").value == "") {
        resp = true;
        
    }
    
    return resp;
}
    
     

function resumen(){
    var ver = verificar();
    
    if (ver == true) {
            document.getElementById("obligatorio").style.display = "flex";
        }



    var costo = 200;
    var dato = document.getElementById("selecto");
    var dato2 = dato.value;
    var asistencia = document.getElementById("cuantos");
    var asistencia2 = asistencia.value;
    var total;


    if ( dato2 == "Estudiante") {
        costo = costo - costo * 0.80; 
    } else if (dato2 == "Trainne") {
        costo = costo - costo * 0.5;
    } else {
        costo = costo - costo * 0.15; 
    }

    total = asistencia2 * costo;

    

    return document.getElementById("resumende").innerHTML=total;
}