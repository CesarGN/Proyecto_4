var db;
var proyecto;
var ListaProyectos;

window.onload = function()
{
    if (!window.openDatabase)
    {
        alert('Tu navegador no soporta Web SQL....');
        return;
    }

    db = window.openDatabase('BD_Proyectos',
            '1.0',
            'BD de Proyectos',
            5 * 1024 * 1024);
    db.transaction(function(tx)
    {
        tx.executeSql('create table if not exists Proyectos(id integer primary key autoincrement,proyecto String,NoId String, Nombre String, feI String, feT String, Estatus String )',
                [],
                function()
                {
                    console.log('Tabla Creada')
                },
                function(t, e)
                {
                    console.log('Error al Crear la tabla' + e.message)
                }

        );
    });

    var btnAgregar = document.getElementById('guardar2');
    var txtProyecto = document.getElementById('nombre');
    var txtNoId = document.getElementById('id_usuario');
    var txtNombre = document.getElementById('materia');
    var txtfeI = document.getElementById('fechai');
    var txtfeT = document.getElementById('fechaf');
    var txtEstatus = document.getElementById('estatus');

    btnAgregar.addEventListener('click', function()
    {
        agregarProyecto(txtProyecto.value, txtNoId.value, txtNombre.value, txtfeI.value, txtfeT.value, txtEstatus.value);

    });
   

};


var agregarProyecto = function(proyecto, NoId, Nombre, feI, feT, Estatus) {

    db.transaction(function(tx) {
        tx.executeSql("INSERT INTO Proyectos (proyecto,NoId,Nombre,feI,feT,Estatus) VALUES ('" + proyecto + "','" + NoId + "','" + Nombre + "','" + feI + "','" + feT + "','" + Estatus + "');",
                [],
                function(t, resultSet) {
                    console.log("Se agregó un proyecto.");
                },
                function(t, e) {
                    console.log("Error al agregar el proyecto:  " + e.message);
                });
    });
}





var finalizarProyecto = function(item) {
    item.className = "terminado";

    db.transaction(function(tx) {
        tx.executeSql("UPDATE Proyectos SET Estatus='Terminado' where proyecto = '" + item.innerText + "';",
                [],
                function() {
                    console.log("Se terminó el proyecto.");
                },
                function(t, e) {
                    console.log("Error al terminar el proyecto: " + e.message);
                })
    });
}


