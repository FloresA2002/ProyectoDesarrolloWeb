 function uncheckDensidad() {
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
function cambiarcolor() {
        var color = document.getElementById("favcolor").value;
        document.getElementById("espacio").style.backgroundColor = color;
    }


    function uncheckEntrega() {
        var checkbox1 = document.getElementById("e1");
        var checkbox2 = document.getElementById("e2");

        checkbox1.onclick = function () {
            if (checkbox1.checked != false) {
                checkbox2.checked = null;
            }
        }
        checkbox2.onclick = function () {
            if (checkbox2.checked != false) {
                checkbox1.checked = null;
            }
        }
    }

function validarCedula() {
        var cedula = document.getElementById("cedula").value;
        array = cedula.split("");
        num = array.length;
        if (num === 10)
        {
            total = 0;
            digito = (array[9] * 1);
            for (i = 0; i < (num - 1); i++) {
                mult = 0;
                if ((i % 2) !== 0) {
                    total = total + (array[i] * 1);
                } else {
                    mult = array[i] * 2;
                    if (mult > 9)
                        total = total + (mult - 9);
                    else
                        total = total + mult;
                }
            }
            decena = total / 10;
            decena = Math.floor(decena);
            decena = (decena + 1) * 10;
            final = (decena - total);
            if ((final === 10 && digito === 0) || (final === digito)) {
                alert("La cédula es válida!!!");
            } else
            {
                alert("La cédula NO es válida!!!");
            }
        } else
        {
            alert("La cédula ser de de 10 dígitos exactos");
        }
        
        var producto = document.getElementByName("producto").value;
    

    if (producto === 0 || producto === "") {
        alert("Seleccione Un tipo de Producto!!!");
        event.proventDefault();
    }
    var densidad = document.getElementsByName("densidad");
        var contador = 0;
        for (var i = 0; i < densidad.length; i++) {
            if (densidad[i].checked) {
                contador++;
            }
        }
        if (contador === 0) {
            alert('Selecicone una Densidad');
            event.preventDefault();
        }
    var credito = document.getElementsByName("credito");
        var contador = 0;
        for (var i = 0; i < credito.length; i++) {
            if (credito[i].checked) {
                contador++;
            }
        }
        if (contador === 0) {
            alert('Selecicone un Plan de Pago');
            event.preventDefault();
    }
    var dia = document.getElementsByName("entrega");
        var contador = 0;
        for (var i = 0; i < dia.length; i++) {
            if (dia[i].dia) {
                contador++;
            }
        }
        if (contador === 0) {
            alert('Selecicone un dia de Entrega');
            event.preventDefault();
    }
        
    } 
       
    
    
