
 function uncheckEstado() {
        var checkbox1 = document.getElementById("d1");
        var checkbox2 = document.getElementById("d2");
        var checkbox3 = document.getElementById("d3");
       
        var checked1 = checkbox1.checked;
        var checked2 = checkbox2.checked;
        var checked3 = checkbox3.checked;
        
        
        if (checked1 == true ) {
                checkbox1.checked = true;
                checkbox2.checked = false;
                checkbox3.checked = false;
            } 
            if (checked2 == true ) {
                checkbox2.checked = true;
                checkbox1.checked = false;
                checkbox3.checked = false;
            } 
            if (checked3 == true ) {
                checkbox3.checked = true;
                checkbox1.checked = false;
                checkbox2.checked = false;
            } 

        checkbox1.onclick = function () {

                checkbox1.checked = true;
                checkbox2.checked = false;
                checkbox3.checked = false;
             
            
        }
        
        checkbox2.onclick = function () {
            
                checkbox2.checked = true;
                checkbox1.checked = false;
                checkbox3.checked = false;
            
        }
        
        checkbox3.onclick = function () {
           
                checkbox3.checked = true;
                checkbox1.checked = false;
                checkbox2.checked = false;
            
        }    
            
        
    }


function validarDecimal(valor) {
    var RE = /^\d*(\.\d{1})?\d{0,1}$/;
    if (RE.test(valor)) {
        return true;
    } else {
        return false;
    }
}

function verificarDatos() {
    var nombre = document.getElementById("id_nombre").value;
    var apellido = document.getElementById("id_apellido").value;
    var edad = document.getElementById("edad").value;
    var hijos = document.getElementById("id_hijos").value;

    if (nombre === 0 || nombre === "") {
        alert("Ingrese datos en el campo nombre!!!");
        event.proventDefault();
    } else if (apellido === 0 || apellido === "") {
        alert("Ingrese datos en el campo apellido!!!");
        event.proventDefault();
    } else if (edad === 0 || edad === "") {
        alert("Seleccione su Fecha de Nacimiento!!!");
        event.proventDefault();
    } else if (hijos === 0 || hijos === "") {
        alert("Ingrese datos en el campo hijos!!!");
        event.proventDefault();
    } else {
        var radio = document.getElementsByName("genero");
        var contador = 0;
        for (var i = 0; i < radio.length; i++) {
            if (radio[i].checked) {
                contador++;
            }
        }
        if (contador === 0) {
            alert('Selecicone una Opcion de Genero');
            event.preventDefault();
        } else {
            var checkEstado = document.getElementsByName("estado");
            var contador = 0;
            for (var i = 0; i < checkEstado.length; i++) {
                if (checkEstado[i].checked) {
                    contador++;
                }
            }
            if (contador === 0) {
                alert("seleccione su estado civil actual");
                event.preventDefault();
            } else if (contador !== 0) {
                var checkCursos = document.getElementsByName("cursos[]");
                var contador = 0;
                for (var i = 0; i < checkCursos.length; i++) {
                    if (checkCursos[i].checked) {
                        contador++;
                    }
                }
                if (contador === 0) {
                    alert("Seleccione Al menos un Curso");
                    event.preventDefault();


                } else {
                    var nivel = document.getElementById("id_educacion").value;
                    var clave = document.getElementById("id_clave").value;
                    var mail = document.getElementById("id_mail").value;
                    var aspiracion = document.getElementById("id_aspiracion").value;
                    var direccion = document.getElementById("id_direccion").value;

                    if (nivel === 0 || nivel === "") {
                        alert("Seleccione el nivel de educacion");
                        event.preventDefault();
                    } else if (clave === 0 || clave === "") {
                        alert("Ingrese su contraseña");
                        event.preventDefault();
                    } else if (mail === 0 || mail === "") {
                        alert("Ingrese su Correo Electronico");
                        event.preventDefault();
                    } else if (aspiracion === 0 || aspiracion === "") {
                        alert("Ingrese su Aspiracion Salarial");
                        event.preventDefault();
                    } else if (direccion === 0 || direccion === "") {
                        alert("Ingrese su Direccion");
                        event.preventDefault();
                    }
                }
            }//validacion de cursos realizados
        }
    }

}




