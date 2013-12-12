


function ocultar_insertar() {
    var opc = document.getElementById("opc");
    var op = opc.value;
    if (op === "Sin conexion") {
        var btn = document.getElementById("guardar1");
        btn.style.visibility = 'hidden';
        btn.style.display = 'none';
        
        var btn2 = document.getElementById("guardar2");
        btn2.style.visibility = 'visible';
        btn2.style.display = '';
    } else {
        var btn = document.getElementById("guardar2");
        btn.style.visibility = 'hidden';
        btn.style.display = 'none';
        
        var btn2 = document.getElementById("guardar1");
        btn2.style.visibility = 'visible';
        btn2.style.display = '';
    }
}

